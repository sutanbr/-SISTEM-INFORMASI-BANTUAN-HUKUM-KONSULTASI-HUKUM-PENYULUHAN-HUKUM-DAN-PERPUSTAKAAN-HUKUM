<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keranjang;
use App\Models\Buku;
use App\Models\Peminjaman;
use Illuminate\Support\Facades\Auth;
use Picqer\Barcode\BarcodeGeneratorPNG;

class keranjangController extends Controller
{
    public function keranjang()
    {
        // Mengambil data keranjang milik user yang sedang login
        $keranjang = Keranjang::with('buku')->where('user_id', Auth::id())->get();

        return view('keranjang.keranjang', compact('keranjang'));
    }

    public function tambahKeKeranjang(Request $request, $kode_buku)
{
    $buku = Buku::findOrFail($kode_buku);

    if ($buku->stok < 1) {
        return back()->with('error', 'Stok buku tidak mencukupi.');
    }

    $keranjang = Keranjang::where('user_id', Auth::id())
        ->where('kode_buku', $kode_buku)
        ->first();

    if ($keranjang) {
        // Jika buku sudah ada di keranjang, tambahkan jumlahnya
        $keranjang->jumlah += 0;
        $keranjang->save();
    } else {
        // Jika belum, buat entri baru
        Keranjang::create([
            'user_id' => Auth::id(),
            'kode_buku' => $kode_buku,
            'jumlah' => 1,
            'stok_berkurang' => false, // Tandai stok belum berkurang
        ]);
    }

    // Jangan langsung kurangi stok di sini
    return back()->with('success', 'Buku berhasil ditambahkan ke keranjang.');
}



public function hapusDariKeranjang($id)
{
    $item = Keranjang::findOrFail($id);
    $buku = Buku::find($item->kode_buku);

    if ($buku) {
        // Hanya kembalikan stok jika stok belum berkurang
        if (!$item->stok_berkurang) {
            // Tidak melakukan perubahan pada stok buku karena belum dipinjam
            // Stok tidak perlu dikembalikan
        }
    }

    // Hapus item dari keranjang
    $item->delete();

    return redirect()->route('keranjang.index')->with('success', 'Item berhasil dihapus dari keranjang.');
}




    public function update(Request $request, $id)
{
    $keranjang = Keranjang::findOrFail($id);
    $buku = Buku::findOrFail($keranjang->kode_buku);

    if ($request->action === 'increase') {
        if ($keranjang->jumlah < $buku->stok) {
            $keranjang->jumlah += 1;
        }
    } elseif ($request->action === 'decrease') {
        if ($keranjang->jumlah > 1) {
            $keranjang->jumlah -= 1;
        }
    }

    $keranjang->save();
    return redirect()->route('keranjang.index')->with('success', 'Jumlah buku berhasil diperbarui.');
}
public function destroy($id)
{
    // Cari item keranjang berdasarkan ID
    $keranjang = Keranjang::findOrFail($id);

    // Cari buku yang terkait dengan keranjang
    $buku = Buku::find($keranjang->kode_buku);
    
    if ($buku) {
        // Jika stok belum berkurang (belum dipinjam), tidak perlu mengubah stok buku
        if (!$keranjang->stok_berkurang) {
            // Tidak melakukan perubahan pada stok buku
        } else {
            // Jika stok sudah berkurang (buku dipinjam), kembalikan stok
            $buku->stok += $keranjang->jumlah;
            $buku->save();
        }
    }

    // Hapus item dari keranjang
    $keranjang->delete();

    return redirect()->route('keranjang.index')->with('success', 'Item berhasil dihapus dari keranjang dan stok dikembalikan.');
}


public function pinjamBuku()
{
    $keranjang = Keranjang::where('user_id', auth()->id())->get();

    foreach ($keranjang as $item) {
        $buku = Buku::find($item->kode_buku);
        if ($buku && $buku->stok >= $item->jumlah) {
            $buku->stok -= $item->jumlah;
            $buku->save();
            
            // Tandai stok sudah berkurang
            $item->stok_berkurang = true;
            $item->save();
        } else {
            return redirect()->route('keranjang.index')->with('error', 'Stok buku tidak mencukupi untuk salah satu item.');
        }
    }

    // Kosongkan keranjang setelah buku dipinjam
    Keranjang::where('user_id', auth()->id())->delete();

    return redirect()->route('keranjang.index')->with('success', 'Buku berhasil dipinjam.');
}



public function store(Request $request)
{
    $request->validate([
        'kode_buku' => 'required|exists:buku,kode_buku',
        'jumlah' => 'required|integer|min:1',
    ]);

    // Tambahkan buku ke keranjang
    $keranjang = Keranjang::updateOrCreate(
        [
            'kode_buku' => $request->kode_buku,
            'user_id' => auth()->id(), // Pastikan ada kolom user_id untuk membedakan user
        ],
        [
            'jumlah' => \DB::raw('jumlah + ' . $request->jumlah),
        ]
    );

    return redirect()->route('keranjang.index')->with('success', 'Buku berhasil ditambahkan ke keranjang.');
}



public function barcode(Request $request)
{
    $dataPerPage = 10;
    $currentPage = $request->get('page', 1);

    $peminjaman = Peminjaman::where('id_user', auth()->id())
                ->with('bukus')
                ->skip(($currentPage - 1) * $dataPerPage)
                ->take($dataPerPage)
                ->orderBy('tanggal_pinjam', 'desc')
                ->get();

    $totalData = Peminjaman::where('id_user', auth()->id())->count();
    $totalPages = ceil($totalData / $dataPerPage);
    $pendingCount = Peminjaman::where('id_user', auth()->id())
                    ->where('status_pinjam', 'pending')
                    ->count();

    // Generate barcode images
    $generator = new BarcodeGeneratorPNG();
    foreach ($peminjaman as $item) {
        $item->barcode_image = 'data:image/png;base64,' . base64_encode(
            $generator->getBarcode($item->kode_buku, $generator::TYPE_CODE_128)
        );
    }

    return view('keranjang.barcode', compact('peminjaman', 'totalPages', 'currentPage', 'pendingCount'));
}

public function jumlahKeranjang()
{
    $jumlah = Keranjang::where('user_id', Auth::id())->sum('jumlah');
    return response()->json(['jumlah' => $jumlah]);
}

}
