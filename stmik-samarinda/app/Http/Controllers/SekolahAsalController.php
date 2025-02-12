<?php

namespace App\Http\Controllers;

use App\Models\SekolahAsal;
use Illuminate\Http\Request;

class SekolahAsalController extends Controller
{
    public function create(){
        $title = 'Identitas SMA/SMK Sederajat';
        return view('pendaftaran2', compact('title'));
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'Namasekolah' => 'required',
            'JurusanSekolah' => 'required',
            'Tahunlulus' => 'required',
            'AlamatSekolah' => 'required',
            'KabupatenKota' => 'required',
            'ProvinsiSekolah' => 'required',
            'NegaraSekolah' => 'required',
        ]);

        $validatedData['pendaftaran_id'] = session('pendaftar_id');

        SekolahAsal::create($validatedData);

        return redirect('/pendaftaran3');
    }
}
