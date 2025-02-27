<?php

namespace App\Http\Controllers;

use App\Models\OrangTua;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrangTuaController extends Controller
{
    public function create(){
        $pendaftaran_id = session('pendaftar_id');

        if (!$pendaftaran_id || !Pendaftaran::where('id', $pendaftaran_id)->exists()) {
            return redirect('/pendaftaran1');
        }
        
        $title = 'Identitas Orang Tua/Wali';
        return view('pendaftaran3', compact('title'));
    }

    public function store(Request $request) {
        $input = $request->all();

        $rules = [
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
        ];

        $messages = [
            'required' => 'Kolom :attribute wajib diisi'
        ];

        $validator = Validator::make($input, $rules, $messages, [
            'NamaAyah' => 'nama ayah',
            'NIKayah' => 'NIK ayah',
            'Tempatlayah' => 'tempat lahir ayah',
            'tgllayah' => 'tanggal lahir ayah',
            'PilihanagamaA' => 'agama ayah',
            'PilihanpendtA' => 'pendidikan ayah',
            'PilihanpekerA' => 'pekerjaan ayah',
            'PilihanpenghasilanA' => 'penghasilan ayah',
            'nohpayah' => 'nomor handphone ayah',
            'PilihanstatA' => 'status ayah',
            'NamaIbu' => 'nama ibu',
            'NIKibu' => 'NIK ibu',
            'Tempatlibu' => 'tempat lahir ibu',
            'tgllibu' => 'tanggal lahir ibu',
            'PilihanagamaI' => 'agama ibu',
            'PilihanpendtI' => 'pendidikan ibu',
            'PilihanpekerI' => 'pekerjaan ibu',
            'PilihanpenghasilanI' => 'penghasilan ibu',
            'nohpibu' => 'nomor handphone ibu',
            'PilihanstatI' => 'status ibu',
            'NamaWali' => 'nama wali',
            'NIKWali' => 'NIK wali',
            'Tempatlwali' => 'tempat lahir wali',
            'PilihanagamaW' => 'agama wali',
            'PilihanpendtW' => 'pendidikan wali',
            'PilihanpekerW' => 'pekerjaan wali',
            'PilihanpenghasilanW' => 'penghasilan wali',
            'nohpwali' => 'nomor hp wali',
            'tgllwali' => 'tanggal lahir wali',
            'Alamatjalan' => 'alamat',
            'rt-rwortu' => 'RT/RW',
            'Kodepos-ortu' => 'kode pos',
            'd-kelurahanortu' => 'desa/kelurahan',
            'Kecamatan-ortu' => 'kecamatan',
            'kabupatenortu' => 'kabupaten',
            'Provinsiortu' => 'provinsi',
            'nohportu' => 'nomor handphone ortu',
        ]);

        $validator['pendaftaran_id'] = session('pendaftar_id');
        
        if($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // OrangTua::create($validatedData);
        OrangTua::updateOrCreate(
            ['pendaftaran_id' => $validator['pendaftaran_id']],
            $validator
        );

        return redirect('/uploadberkas');
    }
}
