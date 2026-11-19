<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Tabel stan: penjual yang melayani pembeli di kantin PCR
     * (stan makanan, penjual camilan, dan koperasi).
     */
    public function up(): void
    {
        Schema::create('stan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_stan', 100)->unique();
            $table->string('jenis', 20); // Makanan, Camilan, Koperasi
            $table->string('nama_pemilik', 100)->nullable();
            $table->string('lokasi', 150)->nullable();
            $table->string('no_whatsapp', 20)->nullable();
            $table->boolean('is_aktif')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('stan');
    }
};
