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
        Schema::create('pengajuan', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_surat');
            $table->string('unit_kerja');
            $table->string('berangkat_dari');
            $table->string('tujuan');
            $table->date('tanggal_berangkat');
            $table->date('tanggal_pulang');
            $table->timestamps();
        });

        Schema::create('anggota_pengajuan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pengajuan_id')->constrained('pengajuan')->onDelete('cascade');
            $table->string('nama_anggota');
            $table->string('nip');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggota_pengajuan');
        Schema::dropIfExists('pengajuan');
    }
};
