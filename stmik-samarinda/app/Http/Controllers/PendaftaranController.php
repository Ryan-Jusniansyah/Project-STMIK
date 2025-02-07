<?php

namespace App\Http\Controllers;

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

    public function pendaftaran2(){
        $title = 'Identitas SMA/SMK Sederajat';
        return view('pendaftaran2', compact('title'));
    }

    public function pendaftaran3(){
        $title = 'Identitas Orang Tua/Wali';
        return view('pendaftaran3', compact('title'));
    }

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
            'Email' => 'email:dns|unique:pendaftaran',
            'Namaperu' => 'nullable',
            'Alamatperu' => 'nullable',
            'Telp-perusahaan' => 'nullable',
            'Jabatan' => 'nullable',
        ]);

        $validatedData['Programstudi'] = 1;

        // dd($validatedData);

        Pendaftaran::create($validatedData);
    }

    public function store2(Request $request) {
        $validatedData = $request->validate([
            'Namasekolah' => 'required',
            'JurusanSekolah' => 'required',
            'Tahunlulus' => 'required',
            'AlamatSekolah' => 'required',
            'KabupatenKota' => 'required',
            'ProvinsiSekolah' => 'required',
            'NegaraSekolah' => 'required',
        ]);

        $validatedData['pendaftaran_id'] = 1;

        SekolahAsal::create($validatedData);
    }

    public function store3(Request $request) {
        $validatedData = $request->validate([
            'NamaAyah' => 'required',
            'NIKayah' => 'required',
            'NIKayah' => 'required',
        ]);
    }
}