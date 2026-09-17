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
        Schema::create('statistik_kasus', function (Blueprint $table) {
            $table->id();
            $table->string('tahun_periode')->default('2026');
            $table->unsignedInteger('total_masuk')->default(28);
            $table->unsignedInteger('telah_selesai')->default(28);
            $table->unsignedInteger('on_going')->default(0);
            $table->unsignedInteger('kekerasan_fisik')->default(0);
            $table->unsignedInteger('kekerasan_psikis')->default(3);
            $table->unsignedInteger('perundungan')->default(0);
            $table->unsignedInteger('kekerasan_seksual')->default(25);
            $table->unsignedInteger('diskriminasi_intoleransi')->default(0);
            $table->unsignedInteger('kebijakan_kekerasan')->default(1);
            $table->text('catatan_kriteria')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('statistik_kasus');
    }
};
