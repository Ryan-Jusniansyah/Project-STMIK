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
        Schema::create('berkas_pendaftaran', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mahasiswa_id')->constrained(
                table: 'mahasiswa',
                indexName: 'berkas_mahasiswa_id'
            );
            $table->string('ijazah_sma');
            $table->string('skhu');
            $table->string('kk');
            $table->string('ktp');
            $table->string('pas_foto');
            $table->string('bukti_pembayaran');
            $table->string('surat_keterangan_sehat');
            $table->string('surat_keterangan_bebas_narkoba');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berkas_pendaftaran');
    }
};
