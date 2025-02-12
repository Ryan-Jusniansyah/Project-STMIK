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
        Schema::create('orang_tua', function (Blueprint $table) {
            $table->id();

            $table->foreignId('pendaftaran_id')->constrained(
                table: 'pendaftaran',
                indexName: 'ortu_pendaftar_id'
            );

            $table->string('NamaAyah');
            $table->string('NIKayah');
            $table->string('Tempatlayah');
            $table->date('tgllayah');
            $table->string('PilihanagamaA');
            $table->string('PilihanpendtA');
            $table->string('PilihanpekerA');
            $table->string('PilihanpenghasilanA');
            $table->string('nohpayah');
            $table->string('PilihanstatA');

            $table->string('NamaIbu');
            $table->string('NIKibu');
            $table->string('Tempatlibu');
            $table->date('tgllibu');
            $table->string('PilihanagamaI');
            $table->string('PilihanpendtI');
            $table->string('PilihanpekerI');
            $table->string('PilihanpenghasilanI');
            $table->string('nohpibu');
            $table->string('PilihanstatI');
            
            $table->string('NamaWali');
            $table->string('NIKWali');
            $table->string('Tempatlwali');
            $table->date('tgllwali');
            $table->string('PilihanagamaW');
            $table->string('PilihanpendtW');
            $table->string('PilihanpekerW');
            $table->string('PilihanpenghasilanW');
            $table->string('nohpwali');
            
            $table->string('Alamatjalan');
            $table->string('rt-rwortu');
            $table->string('Kodepos-ortu');
            $table->string('d-kelurahanortu');
            $table->string('Kecamatan-ortu');
            $table->string('kabupatenortu');
            $table->string('Provinsiortu');
            $table->string('nohportu');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orang_tua');
    }
};
