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
        Schema::create('sekolah_asal', function (Blueprint $table) {
            $table->id();

            $table->foreignId('pendaftaran_id')->constrained(
                table: 'pendaftaran',
                indexName: 'sekolah_pendaftar_id'
            );

            $table->string('Namasekolah');
            $table->string('JurusanSekolah');
            $table->integer('Tahunlulus');
            $table->string('AlamatSekolah');
            $table->string('KabupatenKota');
            $table->string('ProvinsiSekolah');
            $table->string('NegaraSekolah');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sekolah_asal');
    }
};
