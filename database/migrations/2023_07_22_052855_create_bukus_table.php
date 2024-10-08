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
        Schema::create('bukus', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('judul');
            $table->string('pengarang');
            $table->string('penerbit');
            $table->string('genre');
            $table->string('status');
            $table->integer('tahun_terbit');
            $table->text('sinopsis');
            $table->string('cover')->nullable();
            $table->integer('jumlah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bukus');
    }
};
