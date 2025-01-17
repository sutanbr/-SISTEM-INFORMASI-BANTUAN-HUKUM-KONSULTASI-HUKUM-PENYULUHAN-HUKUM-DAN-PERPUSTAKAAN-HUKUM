<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $table = 'buku';
    public $timestamps = true;
    protected $primaryKey = 'kode_buku';
    
    // Tambahkan 'jenis' dan 'gambar' ke fillable
    protected $fillable = ['judul', 'kode_buku', 'jenis_buku', 'stok', 'gambar','kode'];

    protected $casts =[
        'kode_buku' => 'string',
        
    ];
    public function keranjang()
{
    return $this->hasMany(Keranjang::class, 'kode_buku', 'kode_buku');
}

protected $appends = ['stok_awal'];

public function getStokAwalAttribute()
{
    return $this->attributes['stok'];
}

}

