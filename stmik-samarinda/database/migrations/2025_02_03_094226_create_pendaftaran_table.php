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
        Schema::create('pendaftaran', function (Blueprint $table) {
            $table->id();

            $table->string('Namalengkap');
            $table->string('Programstudi');
            $table->string('Pilihankelas');

            $table->string('NIK');
            $table->string('NPWP')->nullable();
            $table->string('NISN');
            $table->enum('pilihanjk', ['Perempuan', 'Laki-laki']);
            $table->string('Tempatlahir');
            $table->date('Tanggallahir');
            $table->string('Ukuranbaju');
            $table->string('Pilihanagama');
            $table->string('Pilihanpernikahan');

            $table->text('tinggalbersama');
            $table->text('Alamat');
            $table->text('Kodepos');
            $table->text('RT_RW');
            $table->text('d_kelurahan');
            $table->text('Kecamatan');
            $table->text('Kabupaten');
            $table->text('Provinsi');
            $table->text('Negara');
            $table->string('notelp_hp');
            $table->string('Email');
            
            $table->text('Namaperu')->nullable();
            $table->text('Alamatperu')->nullable();
            $table->text('Telp_perusahaan')->nullable();
            $table->text('Jabatan')->nullable();

            // SEKOLAH

            $table->string('Namasekolah');
            $table->string('JurusanSekolah');
            $table->integer('Tahunlulus');
            $table->text('AlamatSekolah');
            $table->text('KabupatenKota');
            $table->text('ProvinsiSekolah');
            $table->text('NegaraSekolah');

            // ORANG TUA

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
            
            $table->string('NamaWali')->nullable();
            $table->string('NIKWali')->nullable();
            $table->string('Tempatlwali')->nullable();
            $table->date('tgllwali')->nullable();
            $table->string('PilihanagamaW')->nullable();
            $table->string('PilihanpendtW')->nullable();
            $table->string('PilihanpekerW')->nullable();
            $table->string('PilihanpenghasilanW')->nullable();
            $table->string('nohpwali')->nullable();
            
            $table->text('Alamatjalan');
            $table->text('rt_rwortu');
            $table->text('Kodepos_ortu');
            $table->text('d_kelurahanortu');
            $table->text('Kecamatan_ortu');
            $table->text('kabupatenortu');
            $table->text('Provinsiortu');
            $table->text('nohportu');

            // BERKAS

            $table->string('IjazahSMA');
            $table->string('SKHU');
            $table->string('FotocopyKK');
            $table->string('FotocopyKTP');
            $table->string('PasFoto');
            $table->string('BuktiPembayaran');
            $table->string('SuratKetSehat');
            $table->string('SuratKetBebasNarkoba');
            $table->string('SuratPernyataan');

            $table->enum('status', ['draft', 'completed', 'accepted', 'rejected'])->default('draft');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftaran');
    }
};
