<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenggunaTable extends Migration

{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pengguna', function (Blueprint $table) {
            $table->id('id_pengguna'); 
            $table->string('nama'); 
            $table->string('email')->unique(); 
            $table->string('nik')->unique(); 
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->string('username')->unique(); 
            $table->string('password'); 
            $table->unsignedBigInteger('role_id')->default(2); 
            $table->timestamps(); 
        });
    }

     /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('pengguna');
    }
};
