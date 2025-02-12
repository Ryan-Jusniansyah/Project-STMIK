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

            $table->foreignId('pendaftaran')->constrained(
                table: 'pendaftaran',
                indexName: 'berkas_pendaftaran_id'
            );
            $table->string('IjazahSMA');
            $table->string('SKHU');
            $table->string('FotocopyKK');
            $table->string('FotocopyKTP');
            $table->string('PasFoto');
            $table->string('BuktiPembayaran');
            $table->string('SuratKetSehat');
            $table->string('SuratKetBebasNarkoba');
            $table->string('SuratPernyataan');

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
