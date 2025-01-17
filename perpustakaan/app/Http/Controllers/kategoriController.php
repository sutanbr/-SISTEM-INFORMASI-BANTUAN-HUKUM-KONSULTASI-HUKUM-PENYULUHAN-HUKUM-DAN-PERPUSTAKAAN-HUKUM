<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class kategoriController extends Controller
{
    public function hukumpidana()
    {
        $buku = Buku::all();
        return view('kategori.hukumpidana', compact('buku'));
    }
}
