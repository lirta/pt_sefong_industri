<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKontrakPembeliansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kontrak_pembelians', function (Blueprint $table) {
            $table->string('no_kontrak_pembelian');
            $table->date('tgl_kontrak');
            $table->date('tgl_permintaan');
            $table->integer('id_barang');
            $table->integer('harga');
            $table->integer('jml');
            $table->integer('total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kontrak_pembelians');
    }
}
