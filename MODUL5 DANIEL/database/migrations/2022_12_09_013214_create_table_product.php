<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_product', function (Blueprint $table) {
            $table->increments('id_mobil');
            $table->string('nama_mobil');
            $table->string('pemilik_mobil');
            $table->string('merk_mobil');
            $table->date('tanggal_beli');
            $table->string('deskripsi');
            $table->string('foto_mobil');
            $table->string('status_pembayaran');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_product');
    }
};
