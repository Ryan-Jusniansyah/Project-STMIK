<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Prodi;
use App\Models\OrangTua;
use App\Models\Pendaftaran;
use App\Models\SekolahAsal;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Pendaftaran::create([
            'Namalengkap' => 'Salwa Arlinda Humairah',
            'Programstudi' => 'Sistem Informasi (Sarjana)',
            'Pilihankelas' => 'Pagi (Offline)',
            'NIK' => '123123123',
            'NPWP' => '9787878',
            'NISN' => '343453453',
            'pilihanjk' => 'Perempuan',
            'Tempatlahir' => 'Samarinda',
            // 'Tanggallahir' => date('d m Y', '22 01 2002'),
            'Tanggallahir' => now(),
            'Ukuranbaju' => 'M',
            'Pilihanagama' => 'Islam',
            'Pilihanpernikahan' => 'Belum Menikah',
            'tinggalbersama' => 'Pacar',
            'Alamat' => 'Jalan Damanhuri',
            'Kodepos' => '123123',
            'RT_RW' => '01-00',
            'd_kelurahan' => 'Teluk Lerong',
            'Kecamatan' => 'Loa Kulu',
            'Kabupaten' => 'Kota Samarinda',
            'Provinsi' => 'Kalimantan Timur',
            'Negara' => 'Indonesia',
            'notelp_hp' => '0812312312',
            'Email' => 'salwa@gmail.com',

            'Namasekolah' => 'SMKN 7',
            'JurusanSekolah' => 'RPL',
            'Tahunlulus' => 2001,
            'AlamatSekolah' => 'Jalan Damanhuri',
            'KabupatenKota' => 'Kota Samarinda',
            'ProvinsiSekolah' => 'Kalimantan Timur',
            'NegaraSekolah' => 'Indonesia',

            'NamaAyah' => 'Masrullah',
            'NIKayah' => '23123123',
            'Tempatlayah' => 'Samarinda',
            'tgllayah' => now(),
            'PilihanagamaA' => 'Islam',
            'PilihanpendtA' => 'S2',
            'PilihanpekerA' => 'PNS',
            'PilihanpenghasilanA' => '100.000.000',
            'nohpayah' => '0981283102',
            'PilihanstatA' => 'Hidup',

            'NamaIbu' => 'Barbie',
            'NIKibu' => '123123123',
            'Tempatlibu' => 'Samarinda',
            'tgllibu' => now(),
            'PilihanagamaI' => 'Islam',
            'PilihanpendtI' => 'S1',
            'PilihanpekerI' => 'PNS',
            'PilihanpenghasilanI' => '200.000.000',
            'nohpibu' => '08123123123',
            'PilihanstatI' => 'Hidup',

            'NamaWali' => 'Tidak Ada',
            'NIKWali' => 'Tidak Ada',
            'Tempatlwali' => 'Tidak Ada',
            'tgllwali' => now(),
            'PilihanagamaW' =>  'Tidak Ada',
            'PilihanpendtW' =>  'Tidak Ada',
            'PilihanpekerW' =>  'Tidak Ada',
            'PilihanpenghasilanW' =>  'Tidak Ada',
            'nohpwali' =>  'Tidak Ada',
            
            'Alamatjalan' =>  'Tidak Ada',
            'rt_rwortu' =>  'Tidak Ada',
            'Kodepos_ortu' =>  'Tidak Ada',
            'd_kelurahanortu' =>  'Tidak Ada',
            'Kecamatan_ortu' =>  'Tidak Ada',
            'kabupatenortu' =>  'Tidak Ada',
            'Provinsiortu' =>  'Tidak Ada',
            'nohportu' =>  'Tidak Ada',

            'IjazahSMA' => 'reiive.jpg',
            'SKHU' => 'reiive.jpg',
            'FotocopyKK' => 'reiive.jpg',
            'FotocopyKTP' => 'reiive.jpg',
            'PasFoto' => 'pas-foto/reiive.jpg',
            'BuktiPembayaran' => 'reiive.jpg',
            'SuratKetSehat' => 'reiive.jpg',
            'SuratKetBebasNarkoba' => 'reiive.jpg',
            'SuratPernyataan' => 'reiive.jpg',

            'status' => 'completed',
        ]);
    }
}
