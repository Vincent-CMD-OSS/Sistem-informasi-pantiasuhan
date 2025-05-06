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
        Schema::create('tentang_pantis', function (Blueprint $table) {
            $table->id();
            $table->text('tujuan')->nullable();
            $table->text('sejarah_singkat')->nullable();
            $table->text('makna_nama')->nullable();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tentang_pantis');
    }
};
