<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class bukuController extends Controller
{
    public function koleksi()
    {
        $buku = Buku::all();

        return view('admin.koleksi', compact('buku'));
    }
    public function show($kode_buku)
    {
        // Mengambil buku berdasarkan kode_buku dari database
        $buku = Buku::where('kode_buku', $kode_buku)->firstOrFail();
        if (!$buku) {
            abort(404, 'Buku tidak ditemukan');
        }

        return view('buku.hukum1', compact('buku'));
    }

    
    
}
