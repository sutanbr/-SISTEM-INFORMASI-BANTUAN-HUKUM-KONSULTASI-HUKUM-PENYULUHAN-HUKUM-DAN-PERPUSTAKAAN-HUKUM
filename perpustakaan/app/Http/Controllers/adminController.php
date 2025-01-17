<?php

namespace App\Http\Controllers;
use App\Models\Buku;
use App\Models\User;
use App\Models\Pengunjung;
use App\Models\Peminjaman;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Carbon\Carbon;

class adminController extends Controller
{
    public function admin(){
        $jumlahPeminjamanHariIni = $this->hitungPeminjamanHariIni();
        $jumlahPengunjungHariIni = $this->hitungPengunjungHariIni();
        return view('admin.dashboard', compact('jumlahPeminjamanHariIni', 'jumlahPengunjungHariIni'));
    }
    public function super(Request $request)
    {
        $search = $request->input('search');
        $query = User::query();

        // Filter pencarian jika ada
        if ($search) {
            $query->where('name', 'like', "%$search%")
                  ->orWhere('email', 'like', "%$search%");
        }

        $users = $query->paginate(10);

        return view('admin.superadmin', compact('users'));
    }
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return response()->json($user); // Return data dalam format JSON
    }
    public function updates(Request $request, $id)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'role_id' => 'required|integer',
        'nik' => 'required|integer',
        'password' => 'nullable|min:6', // Password opsional tetapi harus minimal 6 karakter jika diisi
    ]);

    $user = User::findOrFail($id);
    $user->name = $request->name;
    $user->email = $request->email;
    $user->role_id = $request->role_id;
    $user->nik = $request->nik;

    // Update password hanya jika diisi
    if ($request->filled('password')) {
        $user->password = Hash::make($request->password);
    }
    

    $user->save();

    return redirect()->route('admin.superadmin')->with('success', 'Data user berhasil diperbarui.');
}


    // Fungsi untuk menghapus data user
   public function destroys($id)
{
    $user = User::findOrFail($id);
    $user->delete();

    return response()->json([
        'message' => 'Data user berhasil dihapus.',
        'status' => 'success'
    ]);
}


    public function koleksis()
{
    // Gunakan paginate() untuk membatasi jumlah buku per halaman
    $bukuList = Buku::paginate(10); // Menampilkan 10 buku per halaman

    return view('admin.koleksis', compact('bukuList'));
}

    public function update(Request $request, $kode_buku)
    {
        // Validasi data yang diterima
        $request->validate([
            'judul' => 'required',
            'jenis' => 'required',
            'stok' => 'required|integer',
        ]);

        // Temukan buku berdasarkan kode_buku
        $buku = Buku::findOrFail($kode_buku);
        $buku->judul = $request->judul;
        $buku->jenis_buku = $request->jenis; // Asumsikan Anda memiliki kolom jenis_buku di tabel
        $buku->stok = $request->stok;
        $buku->save();

        // Redirect ke halaman daftar buku dengan pesan sukses
        return redirect()->route('koleksis')->with('success', 'Buku berhasil diperbarui.');
    }
    public function destroy($kode_buku)
{
    // Temukan buku berdasarkan kode_buku
    $buku = Buku::findOrFail($kode_buku);

    // Hapus buku dari database
    $buku->delete();

    // Redirect ke halaman daftar buku dengan pesan sukses
    return redirect()->route('koleksis')->with('success', 'Buku berhasil dihapus.');
}
    public function tambah(){
        return view('admin.tambah');
    }
    public function pengunjung()
{
    $pengunjungs = Pengunjung::orderBy('tanggal_kunjungan', 'desc')->paginate(10);
    return view('admin.pengunjung', compact('pengunjungs'));
}


    public function storePengunjung(Request $request)
{
    $validatedData = $request->validate([
        'nama' => 'required|string|max:255',
        'asal_daerah' => 'required|string|max:255',
    ]);

    Pengunjung::create([
        'nama' => $validatedData['nama'],
        'asal_daerah' => $validatedData['asal_daerah'],
        'tanggal_kunjungan' => now(), // Tanggal kunjungan otomatis
    ]);

    return redirect()->back()->with('success', 'Pengunjung berhasil ditambahkan!');
}


    public function store(Request $request)
{
    // Validasi input
    $validatedData = $request->validate([
        'kode_buku' => 'required|unique:buku,kode_buku',
        'judul' => 'required',
        'jenis_buku' => 'required',
        'kode' => 'required',
        'stok' => 'required|integer',
        'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ], [
        'gambar.max' => 'Ukuran gambar tidak boleh lebih dari 2MB.',
    ]);
    // Proses upload gambar
    if ($request->hasFile('gambar')) {
        $file = $request->file('gambar');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('images'), $filename); // Pindahkan gambar ke folder images

        $validatedData['gambar'] = $filename; // Simpan nama file gambar
    }

    // Simpan data buku ke database
    Buku::create($validatedData); // Pastikan model Buku diimport

    return redirect()->route('koleksis')->with('success', 'Buku berhasil ditambahkan.');
    if (!file_exists(public_path('images'))) {
        mkdir(public_path('images'), 0777, true);
    }
}
public function peminjaman(Request $request)
{
    $query = Peminjaman::query();

    if (auth()->user()->role_id == 1) {
        $query->with('bukus');
    } else {
        $query->where('id_user', auth()->id())->with('bukus');
    }

    // Filter pencarian
    if ($request->has('search')) {
        $search = $request->input('search');
        $query->whereHas('user', function ($q) use ($search) {
            $q->where('name', 'LIKE', "%{$search}%")
              ->orWhere('email', 'LIKE', "%{$search}%");
        })->orWhereHas('buku', function ($q) use ($search) {
            $q->where('judul', 'LIKE', "%{$search}%")
              ->orWhere('kode', 'LIKE', "%{$search}%")
              ->orWhere('status_pinjam', 'LIKE', "%{$search}%")
              ->orWhere('kode_buku', 'LIKE', "%{$search}%")
              ->orWhere('tanggal_pinjam', 'LIKE', "%{$search}%")
              ->orWhere('jenis_buku', 'LIKE', "%{$search}%");
        });
    }
    

    // Filter pengurutan
    $sort = $request->input('sort', 'id_peminjaman');
    $order = $request->input('order', 'desc');
    $query->orderBy($sort, $order);

    // Paginate
    $peminjaman = $query->paginate(10)->appends($request->all());

    return view('admin.peminjamanadmin', compact('peminjaman'));
}

public function updatepinjam(Request $request, $id_peminjaman)
{
    // Validasi data yang diterima
    $request->validate([
        'kode_buku' => 'required',
        'kode_barcode' => 'required',
        'status_pinjam' => 'required',
    ]);

    // Temukan peminjaman berdasarkan id_peminjaman
    $peminjaman = Peminjaman::findOrFail($id_peminjaman);
    $peminjaman->kode_buku = $request->kode_buku;
    $peminjaman->kode_barcode = $request->kode_barcode;
    $peminjaman->status_pinjam = $request->status_pinjam;
    $peminjaman->save();

    // Redirect ke halaman daftar peminjaman dengan pesan sukses
    return redirect()->route('peminjamanadmin')->with('success', 'Peminjaman berhasil diperbarui.');
}
public function destroypinjam($id_peminjaman)
{
    // Temukan peminjaman berdasarkan id_peminjaman
    $peminjaman = Peminjaman::findOrFail($id_peminjaman);

    // Hapus peminjaman dari database
    $peminjaman->delete();

    // Redirect ke halaman daftar peminjaman dengan pesan sukses
    return redirect()->route('peminjamanadmin')->with('success', 'Peminjaman berhasil dihapus.');
}
public function hitungPeminjamanHariIni()
    {
        $today = Carbon::today();

        // Menghitung jumlah peminjaman untuk hari ini
        return Peminjaman::whereDate('tanggal_pinjam', $today)->count();
    }

    // Fungsi untuk menghitung jumlah pengunjung hari ini
    public function hitungPengunjungHariIni()
    {
        $today = Carbon::today();

        // Menghitung jumlah pengunjung untuk hari ini
        return Pengunjung::whereDate('tanggal_kunjungan', $today)->count();
    }
}
