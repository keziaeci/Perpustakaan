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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->uuid('id');
            // $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            // $table->foreignId('buku_id')->constrained('bukus')->cascadeOnDelete();
            $table->foreignId('user_id');
            $table->foreignId('buku_id');
            $table->timestamp('tanggal_pinjam');
            $table->timestamp('tanggal_kembali')->nullable();
            $table->timestamp('batas_waktu')->nullable();
            $table->string('status' , 100);
            $table->integer('jumlah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
