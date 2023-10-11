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
        Schema::create('beli', function (Blueprint $table) {
            $table->increments("id");
            $table->string("judul");
            $table->string("penulis");
            $table->string("harga");
            $table->string("link");
            $table->string("pembeli");
            $table->string("telp");
            $table->string("alamat");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beli');
    }
};
