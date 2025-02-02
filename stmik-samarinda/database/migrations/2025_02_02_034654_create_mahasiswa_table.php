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
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');

            $table->foreignId('prodi_id')->constrained(
                table: 'prodi',
                indexName: 'mahasiswa_prodi_id'
            );

            $table->string('nik')->unique();
            $table->string('npwp')->unique();
            $table->string('nisn')->unique();
            $table->enum('jenis_kelamin', ['Perempuan', 'Laki-laki']);
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->float('berat_badan');
            $table->float('tinggi_badan');
            $table->string('agama');
            $table->boolean('menikah');

            $table->string('tinggal_bersama');
            $table->string('alamat');
            $table->string('kode_pos');
            $table->string('rt');
            $table->string('rw');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('kabupaten');
            $table->string('provinsi');
            $table->string('negara');
            $table->string('nomor_telepon');
            $table->string('email')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa');
    }
};
