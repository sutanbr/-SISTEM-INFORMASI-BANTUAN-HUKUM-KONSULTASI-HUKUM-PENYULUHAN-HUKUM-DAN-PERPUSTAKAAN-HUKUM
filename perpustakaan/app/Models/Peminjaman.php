<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    protected $table = 'peminjaman';
    public $timestamps = true;
    protected $primaryKey = 'id_peminjaman';

    protected $fillable = ['id_user', 'kode_buku', 'tanggal_pinjam', 'kode_barcode', 'status_pinjam'];

    public function bukus()
    {
        return $this->belongsTo(Buku::class, 'kode_buku', 'kode_buku');
    }

    // Jika Anda ingin menambahkan hubungan (relations), misalnya dengan tabel user dan buku
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function buku()
    {
        return $this->belongsTo(Buku::class, 'kode_buku', 'kode_buku');
    }
}
