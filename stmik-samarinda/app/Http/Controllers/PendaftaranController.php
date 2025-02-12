<?php

namespace App\Http\Controllers;

use App\Models\OrangTua;
use Illuminate\Http\Request;
use App\Models\Pendaftaran;
use App\Models\SekolahAsal;
use Illuminate\Support\Facades\Redis;

class PendaftaranController extends Controller{

    Public function pendaftaran1()
    {
        $title = 'Identitas Data Diri & Program Studi';
        return view('pendaftaran1', compact('title'));
    }

    public function uploadberkas(){
        $title = 'Upload Berkas Pendaftaran';
        return view('uploadberkas', compact('title'));
    }

    // public function pendaftaran2(){
    //     $title = 'Identitas SMA/SMK Sederajat';
    //     return view('pendaftaran2', compact('title'));
    // }

    // public function pendaftaran3(){
    //     $title = 'Identitas Orang Tua/Wali';
    //     return view('pendaftaran3', compact('title'));
    // }

    public function store1(Request $request) {
        $validatedData = $request->validate([
            'Pilihankelas' => 'required',
            'Namalengkap' => 'required',
            'NIK' => 'required',
            'NPWP' => 'required',
            'NISN' => 'required',
            'pilihanjk' => 'required',
            'Tempatlahir' => 'required',
            'Tanggallahir' => 'required',
            'berat-tinggibadan' => 'required',
            'Pilihanagama' => 'required',
            'Pilihanpernikahan' => 'required',
            'tinggalbersama' => 'required',
            'Alamat' => 'required',
            'Kodepos' => 'required',
            'RT-RW' => 'required',
            'd-kelurahan' => 'required',
            'Kecamatan' => 'required',
            'Kabupaten' => 'required',
            'Provinsi' => 'required',
            'Negara' => 'required',
            'notelp-hp' => 'required',
            'Email' => 'required|email:dns|unique:pendaftaran',
            'Namaperu' => 'nullable',
            'Alamatperu' => 'nullable',
            'Telp-perusahaan' => 'nullable',
            'Jabatan' => 'nullable',
        ]);

        $validatedData['Programstudi'] = 1;

        // dd($validatedData);

        $pendaftar = Pendaftaran::create($validatedData);

        session(['pendaftar_id' => $pendaftar->id]);
        return redirect('/pendaftaran2');
    }

    // public function store2(Request $request) {
    //     $validatedData = $request->validate([
    //         'Namasekolah' => 'required',
    //         'JurusanSekolah' => 'required',
    //         'Tahunlulus' => 'required',
    //         'AlamatSekolah' => 'required',
    //         'KabupatenKota' => 'required',
    //         'ProvinsiSekolah' => 'required',
    //         'NegaraSekolah' => 'required',
    //     ]);

    //     $validatedData['pendaftaran_id'] = session('pendaftar_id');

    //     SekolahAsal::create($validatedData);

    //     return redirect('/pendaftaran3');
    // }

    // public function store3(Request $request) {
    //     $validatedData = $request->validate([
    //         'NamaAyah' => 'required',
    //         'NIKayah' => 'required',
    //         'Tempatlayah' => 'required',
    //         'tgllayah' => 'required',
    //         'PilihanagamaA' => 'required',
    //         'PilihanpendtA' => 'required',
    //         'PilihanpekerA' => 'required',
    //         'PilihanpenghasilanA' => 'required',
    //         'nohpayah' => 'required',
    //         'PilihanstatA' => 'required',
    //         'NamaIbu' => 'required',
    //         'NIKibu' => 'required',
    //         'Tempatlibu' => 'required',
    //         'tgllibu' => 'required',
    //         'PilihanagamaI' => 'required',
    //         'PilihanpendtI' => 'required',
    //         'PilihanpekerI' => 'required',
    //         'PilihanpenghasilanI' => 'required',
    //         'nohpibu' => 'required',
    //         'PilihanstatI' => 'required',
    //         'NamaWali' => 'required',
    //         'NIKWali' => 'required',
    //         'Tempatlwali' => 'required',
    //         'PilihanagamaW' => 'required',
    //         'PilihanpendtW' => 'required',
    //         'PilihanpekerW' => 'required',
    //         'PilihanpenghasilanW' => 'required',
    //         'nohpwali' => 'required',
    //         'Alamatjalan' => 'required',
    //         'rt-rwortu' => 'required',
    //         'Kodepos-ortu' => 'required',
    //         'd-kelurahanortu' => 'required',
    //         'Kecamatan-ortu' => 'required',
    //         'kabupatenortu' => 'required',
    //         'Provinsiortu' => 'required',
    //         'nohportu' => 'required',
    //     ]);

    //     $validatedData['pendaftaran_id'] = session('pendaftar_id');

    //     OrangTua::create($validatedData);

    //     session()->forget(['pendaftar_id']);
    //     return redirect('/uploadberkas');
    // }
}