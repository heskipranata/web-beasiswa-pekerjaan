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
        Schema::create('lowongan_kerja', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('jenis'); // Full-time, Magang, Freelance
            $table->string('lokasi');
            $table->string('perusahaan');
            $table->text('deskripsi');
            $table->string('link_detail')->nullable();
            $table->date('deadline')->nullable();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lowongan_kerja');
    }
};
