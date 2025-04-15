<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('kegiatan_pantiasuhan', function (Blueprint $table) {
            $table->id('kegiatan_id');
            $table->string('nama_kegiatan', 100);
            $table->text('deskripsi');
            $table->string('gambar_utama', 255);
            $table->string('lokasi', 100);
            $table->date('tanggal_kegiatan');
            $table->timestamps(); // created_at dan updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kegiatan_pantiasuhan');
    }
};
