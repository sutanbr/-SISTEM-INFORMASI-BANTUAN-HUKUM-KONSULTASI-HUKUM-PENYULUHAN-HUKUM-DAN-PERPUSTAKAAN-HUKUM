<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('keranjang', function (Blueprint $table) {
        $table->boolean('stok_berkurang')->default(false); // Menandakan apakah stok sudah berkurang
    });
}

public function down()
{
    Schema::table('keranjang', function (Blueprint $table) {
        $table->dropColumn('stok_berkurang');
    });
}

};
