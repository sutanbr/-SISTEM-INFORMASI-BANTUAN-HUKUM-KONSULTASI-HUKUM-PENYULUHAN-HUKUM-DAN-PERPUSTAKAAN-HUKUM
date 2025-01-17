<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Pengunjung;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }
    public function home()
{
    // Ambil salah satu buku dari database, misalnya berdasarkan kode_buku tertentu
    $buku = Buku::take(5)->get();

    // Pastikan data buku ditemukan, jika tidak, tampilkan pesan error atau handle sesuai kebutuhan
    if (!$buku) {
        abort(404, 'Buku tidak ditemukan');
    }

    // Kirim data buku ke view
    return view('dashboard.home', compact('buku'));
}

    public function koleksi()
{
    $buku = Buku::all();
    return view('dashboard.koleksi', compact('buku'));
}

    public function bantuan()
    {
        return view('dashboard.bantuan');
    }
    public function profile()
    {
        $profiles = [
            ['name' => 'John Doe', 'origin' => 'New York, USA', 'birth' => '1990-01-15', 'image' => 'images/rdn.jpg'],
            ['name' => 'Jane Smith', 'origin' => 'London, UK', 'birth' => '1985-03-22', 'image' => 'images/rdns.jpg'],
            ['name' => 'Robert Brown', 'origin' => 'Sydney, Australia', 'birth' => '1982-07-10', 'image' => 'images/dnc.jpg'],
            ['name' => 'Maria Garcia', 'origin' => 'Barcelona, Spain', 'birth' => '1995-12-05', 'image' => 'images/kzh.jpg'],
            ['name' => 'Li Wei', 'origin' => 'Beijing, China', 'birth' => '1993-05-18', 'image' => 'images/sprkl.jpg'],
        ];
        return view('dashboard.profile',compact('profiles'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:100',
            'asal_daerah' => 'required|max:100',
        ]);
    
        Pengunjung::create([
            'nama' => $request->nama,
            'asal_daerah' => $request->asal_daerah,
        ]);
    
        // Kirim respon sukses tanpa redirect
        return response()->json(['message' => 'Pengunjung berhasil ditambahkan!']);
    }

    // sudah login
    
}
