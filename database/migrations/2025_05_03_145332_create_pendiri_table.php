<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('pendiri', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('profil_panti_id'); // relasi ke profil_panti
            $table->string('nama_pengurus');
            $table->string('jabatan');
            $table->string('foto'); // path atau nama file
            $table->timestamps();

            $table->foreign('profil_panti_id')->references('id')->on('profil_panti')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendiri');
    }
};
