<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\Peminjaman;
use App\Models\Buku;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PinjamController extends Controller
{
    public function pinjamBuku()
    {
        // Ambil semua item keranjang milik user yang sedang login
        $keranjang = Keranjang::where('user_id', auth()->id())->get();

        foreach ($keranjang as $item) {
            // Cari buku yang sesuai dengan kode buku di keranjang
            $buku = Buku::find($item->kode_buku);

            // Pastikan buku ada dan stok mencukupi
            if ($buku && $buku->stok >= $item->jumlah) {
                // Generate kode barcode untuk peminjaman, misalnya dengan menggunakan ID buku
                $kode_barcode = 'B' . $item->kode_buku . '-' . now()->timestamp;

                // Masukkan data peminjaman ke tabel peminjaman
                Peminjaman::create([
                    'id_user' => auth()->id(),
                    'kode_buku' => $item->kode_buku,
                    'kode_barcode' => $kode_barcode,
                    'status_pinjam' => 'Pending', // status awal adalah Pending
                ]);

                // Kurangi stok buku sesuai jumlah peminjaman
                $buku->stok -= $item->jumlah;
                $buku->save();
            } else {
                return redirect()->route('keranjang.index')->with('error', 'Stok buku tidak mencukupi untuk salah satu item.');
            }
        }

        // Kosongkan keranjang setelah peminjaman berhasil
        Keranjang::where('user_id', auth()->id())->delete();

        return redirect()->route('keranjang.index')->with('success', 'Buku berhasil dipinjam.');
    }
}
