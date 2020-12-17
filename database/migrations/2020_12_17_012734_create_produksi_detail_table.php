<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduksiDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produksi_detail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_produksi');
            $table->foreign('id_produksi')->references('id')->on('produksi')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('id_produk');
            $table->foreign('id_produk')->references('id')->on('produk')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('qty');
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
        Schema::dropIfExists('produksi_detail');
    }
}
