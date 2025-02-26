<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use App\Models\SekolahAsal;
use Illuminate\Http\Request;

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

        // SekolahAsal::create($validatedData);
        SekolahAsal::updateOrCreate(
            ['pendaftaran_id' => $validatedData['pendaftaran_id']],
            $validatedData
        );

        return redirect('/pendaftaran3');
    }
}
