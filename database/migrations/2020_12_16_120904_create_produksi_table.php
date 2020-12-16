<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produksi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_produk_mentah');
            $table->foreign('id_produk_mentah')->references('id')->on('produk')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('id_produk_jadi');
            $table->foreign('id_produk_jadi')->references('id')->on('produk')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('produksi');
    }
}
