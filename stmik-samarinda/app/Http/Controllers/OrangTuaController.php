<?php

namespace App\Http\Controllers;

use App\Models\OrangTua;
use Illuminate\Http\Request;

class OrangTuaController extends Controller
{
    public function create(){
        $title = 'Identitas Orang Tua/Wali';
        return view('pendaftaran3', compact('title'));
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'NamaAyah' => 'required',
            'NIKayah' => 'required',
            'Tempatlayah' => 'required',
            'tgllayah' => 'required',
            'PilihanagamaA' => 'required',
            'PilihanpendtA' => 'required',
            'PilihanpekerA' => 'required',
            'PilihanpenghasilanA' => 'required',
            'nohpayah' => 'required',
            'PilihanstatA' => 'required',
            'NamaIbu' => 'required',
            'NIKibu' => 'required',
            'Tempatlibu' => 'required',
            'tgllibu' => 'required',
            'PilihanagamaI' => 'required',
            'PilihanpendtI' => 'required',
            'PilihanpekerI' => 'required',
            'PilihanpenghasilanI' => 'required',
            'nohpibu' => 'required',
            'PilihanstatI' => 'required',
            'NamaWali' => 'required',
            'NIKWali' => 'required',
            'Tempatlwali' => 'required',
            'PilihanagamaW' => 'required',
            'PilihanpendtW' => 'required',
            'PilihanpekerW' => 'required',
            'PilihanpenghasilanW' => 'required',
            'nohpwali' => 'required',
            'tgllwali' => 'required',
            'Alamatjalan' => 'required',
            'rt-rwortu' => 'required',
            'Kodepos-ortu' => 'required',
            'd-kelurahanortu' => 'required',
            'Kecamatan-ortu' => 'required',
            'kabupatenortu' => 'required',
            'Provinsiortu' => 'required',
            'nohportu' => 'required',
        ]);

        $validatedData['pendaftaran_id'] = session('pendaftar_id');

        OrangTua::create($validatedData);

        session()->forget(['pendaftar_id']);

        dd(session('pendaftar_id'));

        return redirect('/uploadberkas');
    }
}
