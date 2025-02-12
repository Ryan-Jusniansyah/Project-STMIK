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

            $table->foreignId('Programstudi')->constrained(
                table: 'prodi',
                indexName: 'mahasiswa_prodi_id'
            );

            $table->string('NIK')->unique();
            $table->string('NPWP')->unique();
            $table->string('NISN')->unique();
            $table->enum('pilihanjk', ['Perempuan', 'Laki-laki']);
            $table->string('Tempatlahir');
            $table->date('Tanggallahir');
            $table->string('berat-tinggibadan');
            // $table->float('tinggi_badan');
            $table->string('Pilihanagama');
            $table->string('Pilihanpernikahan');

            $table->string('tinggalbersama');
            $table->string('Alamat');
            $table->string('Kodepos');
            $table->string('RT-RW');
            // $table->string('rw');
            $table->string('d-kelurahan');
            $table->string('Kecamatan');
            $table->string('Kabupaten');
            $table->string('Provinsi');
            $table->string('Negara');
            $table->string('notelp-hp');
            $table->string('Email')->unique();
            
            $table->string('Namaperu')->nullable();
            $table->string('Alamatperu')->nullable();
            $table->string('Telp-perusahaan')->nullable();
            $table->string('Jabatan')->nullable();

            $table->enum('status', ['draft', 'completed'])->default('draft');


            // $table->string('nama_lengkap');

            // $table->foreignId('prodi_id')->constrained(
            //     table: 'prodi',
            //     indexName: 'mahasiswa_prodi_id'
            // );

            // $table->string('nik')->unique();
            // $table->string('npwp')->unique();
            // $table->string('nisn')->unique();
            // $table->enum('jenis_kelamin', ['Perempuan', 'Laki-laki']);
            // $table->string('tempat_lahir');
            // $table->date('tanggal_lahir');
            // $table->float('berat_badan');
            // $table->float('tinggi_badan');
            // $table->string('agama');
            // $table->boolean('menikah');

            // $table->string('tinggal_bersama');
            // $table->string('alamat');
            // $table->string('kode_pos');
            // $table->string('rt');
            // $table->string('rw');
            // $table->string('kelurahan');
            // $table->string('kecamatan');
            // $table->string('kabupaten');
            // $table->string('provinsi');
            // $table->string('negara');
            // $table->string('nomor_telepon');
            // $table->string('email')->unique();
            
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
