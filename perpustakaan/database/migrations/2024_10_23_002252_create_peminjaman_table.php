<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamanTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id('id_peminjaman');
            $table->string('kode_buku',50);
            $table->unsignedBigInteger('id_user'); // Ganti id_pengguna dengan id_user untuk menyamakan dengan tabel users
            $table->timestamp('tanggal_pinjam')->useCurrent();
            // $table->string('kode_barcode', 100);
            $table->enum('status_pinjam', ['Pending', 'Approved', 'Returned'])->default('Pending');
            $table->timestamps();
        
            // Foreign key relationships
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('kode_buku')->references('kode_buku')->on('buku')->onDelete('cascade');
        });
        
        
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman');
    }
};
