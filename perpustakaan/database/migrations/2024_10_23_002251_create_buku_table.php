<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukuTable extends Migration

{
    public function up(): void
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->string('kode_buku', 50)->primary();
            $table->string('judul');
            $table->string('jenis_buku');
            $table->string('kode');
            $table->integer('stok')->check('stok >= 0');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('buku');
    }
}
