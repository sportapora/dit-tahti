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
        Schema::create('ditlantas', function (Blueprint $table) {
            $table->id();
            $table->enum('barang_temuan', ['Daftar Barang Temuan', 'Barang Temuan Sebagai Barang Bukti']);
            $table->string('nama_kendaraan');
            $table->string('identitas_kendaraan');
            $table->string('no_surat_tilang');
            $table->string('penyidik');
            $table->enum('kondisi', ['B', 'RR', 'RB']);
            $table->string('nama_pemilik');
            $table->text('keterangan');
            $table->string('gambar1');
            $table->string('gambar2')->nullable();
            $table->string('gambar3')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ditlantas');
    }
};
