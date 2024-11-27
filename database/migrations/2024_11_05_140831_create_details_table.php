<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('details', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('product_id');
            $table->foreign('product_id')->references('product_id')->on('products')->onDelete('cascade');
            $table->string('nama_product');
            $table->foreign('nama_product')->references('nama')->on('products')->onDelete('cascade');
            $table->date('tanggal');
            $table->integer('modal');
            $table->foreign('modal')->references('modal')->on('modals')->onDelete('cascade');
            $table->integer('terjual');
            $table->integer('harga_jual');
            $table->foreign('harga_jual')->references('harga')->on('products')->onDelete('cascade');
            $table->integer('untung');

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('details');
    }
};
