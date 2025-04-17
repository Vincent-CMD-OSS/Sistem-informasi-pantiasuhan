<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('kebutuhan', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('deskripsi');
            $table->integer('jumlah_kebutuhan')->nullable();
            $table->string('satuan', 50)->nullable();
            $table->string('kategori', 100);
            $table->enum('status', ['Belum Terpenuhi', 'Sebagian Terpenuhi', 'Sudah Terpenuhi'])->default('Belum Terpenuhi');
            $table->date('tanggal_dibuat')->nullable();
            $table->date('batas_waktu')->nullable();
            $table->string('gambar')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kebutuhan');
    }
};
