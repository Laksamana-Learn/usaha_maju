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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('product_id') -> unique();
            $table->string('nama') -> unique();
            $table->string('slug');
            $table->string('kategori');
            $table->foreign('kategori')->references('kategori')->on('categories')->onDelete('cascade');
            $table->longText('deskripsi');
            $table->integer('harga');
            $table->integer('stok');
            $table->string('foto')->nullable();


            $table -> index('harga');

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
