<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use App\Models\SekolahAsal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SekolahAsalController extends Controller
{
    public function create(){
        $pendaftaran_id = session('pendaftar_id');

        if (!$pendaftaran_id || !Pendaftaran::where('id', $pendaftaran_id)->exists()) {
            return redirect('/pendaftaran1');
        }
        
        $title = 'Identitas SMA/SMK Sederajat';
        return view('pendaftaran2', compact('title'));
    }

    public function store(Request $request) {
        $input = $request->all();

        $rules = [
            'Namasekolah' => 'required',
            'JurusanSekolah' => 'required',
            'Tahunlulus' => 'required',
            'AlamatSekolah' => 'required',
            'KabupatenKota' => 'required',
            'ProvinsiSekolah' => 'required',
            'NegaraSekolah' => 'required',
        ];

        $messages = [
            'required' => 'Kolom :attribute wajib diisi'
        ];

        $validator = Validator::make($input, $rules, $messages, [
            'Namasekolah' => 'nama sekolah',
            'JurusanSekolah' => 'jurusan sekolah',
            'Tahunlulus' => 'tahun lulus',
            'AlamatSekolah' => 'alamat sekolah',
            'KabupatenKota' => 'kabupaten/kota',
            'ProvinsiSekolah' => 'provinsi sekolah',
            'NegaraSekolah' => 'negara sekolah'
        ]);

        if($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $validator = $validator->validate();
        
        $validator['pendaftaran_id'] = session('pendaftar_id');
        // SekolahAsal::create($validatedData);
        SekolahAsal::updateOrCreate(
            ['pendaftaran_id' => $validator['pendaftaran_id']],
            $validator
        );

        return redirect('/pendaftaran3');
    }
}
