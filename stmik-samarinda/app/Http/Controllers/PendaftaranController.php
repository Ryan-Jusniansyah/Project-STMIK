<?php

namespace App\Http\Controllers;

use App\Models\OrangTua;
use App\Models\Pendaftaran;
use App\Models\SekolahAsal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Validator;

class PendaftaranController extends Controller{

    Public function pendaftaran1()
    {
        $title = 'Identitas Data Diri & Program Studi';
        return view('pendaftaran1', compact('title'));
    }

    public function store1(Request $request) {
        $input = $request->all();

        // $input['Programstudi'] = 1;

        $rules = [
            'Pilihankelas' => 'required',
            'Namalengkap' => 'required',
            'NIK' => 'required',
            'NPWP' => 'nullable',
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
            'Email' => 'required|email:dns',
            'Namaperu' => 'nullable',
            'Alamatperu' => 'nullable',
            'Telp-perusahaan' => 'nullable',
            'Jabatan' => 'nullable',
        ];

        $messages = [
            'required' => 'Kolom :attribute wajib diisi',
            'unique' => ':attribute sudah terdaftar',
            'email' => 'Tolong masukkan alamat email yang valid'
        ];

        $validator = Validator::make($input, $rules, $messages, [
            'Pilihankelas' => 'pilihan kelas',
            'Namalengkap' => 'nama lengkap',
            'NIK' => 'NIK',
            'NPWP' => 'NPWP',
            'NISN' => 'NISN',
            'pilihanjk' => 'jenis kelamin',
            'Tempatlahir' => 'tempat lahir',
            'Tanggallahir' => 'tanggal lahir',
            'berat-tinggibadan' => 'berat & tinggi badan',
            'Pilihanagama' => 'agama',
            'Pilihanpernikahan' => 'status pernikahan',
            'tinggalbersama' => 'tinggal bersama',
            'Alamat' => 'alamat',
            'Kodepos' => 'kode pos',
            'RT-RW' => 'RT-RW',
            'd-kelurahan' => 'desa/kelurahan',
            'Kecamatan' => 'kecamatan',
            'Kabupaten' => 'kabupaten',
            'Provinsi' => 'provinsi',
            'Negara' => 'negara',
            'notelp-hp' => 'nomor telepon/handphone',
            'Email' => 'Alamat email',
        ]);

        if($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $validator = $validator->validate();
        $validator['Programstudi'] = 'Sistem Informasi (Sarjana)';

        $pendaftar = Pendaftaran::create($validator);

        session(['pendaftar_id' => $pendaftar->id]);
        // dd(redirect('/pendaftaran2'));
        return redirect('/pendaftaran2');
    }
}