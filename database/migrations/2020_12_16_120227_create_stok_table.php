<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStokTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stok_gudang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_gudang');
            $table->foreign('id_gudang')->references('id')->on('gudang')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('id_produk');
            $table->foreign('id_produk')->references('id')->on('produk')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('stok');
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
        Schema::dropIfExists('stok');
    }
}
