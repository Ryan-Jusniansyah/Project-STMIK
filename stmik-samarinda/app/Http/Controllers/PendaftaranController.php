<?php

namespace App\Http\Controllers;

use App\Models\OrangTua;
use App\Models\Pendaftaran;
use App\Models\SekolahAsal;
use Illuminate\Http\Request;
use App\Models\TemporaryForm;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Validator;

class PendaftaranController extends Controller{
    public function start()
    {
        $form = TemporaryForm::create(['data' => []]);
        session(['form_id' => $form->id]);
        return redirect()->route('form.step1');
    }

    public function create1()
    {
        $formid = session('form_id');

        
        // dd($formid);
        
        if (!$formid || !TemporaryForm::where('id', $formid)->exists()) {
            return redirect()->route('form.start');
        }

        $form = TemporaryForm::findOrFail($formid);

        $title = 'Identitas Data Diri & Program Studi';
        return view('pendaftaran1', [
            'form' => $form,
            'title' => $title
        ]);
    }

    public function store1(Request $request) {
        $form = TemporaryForm::findOrFail(session('form_id'));

        $input = $request->all();

        // $input['Programstudi'] = 1;

        $rules = [
            'Pilihankelas' => 'required',
            'Namalengkap' => 'required',
            'NIK' => 'required|size:16',
            'NPWP' => 'nullable|min:15|max:16',
            'NISN' => 'required|size:10',
            'pilihanjk' => 'required',
            'Tempatlahir' => 'required',
            'Tanggallahir' => 'required',
            'Ukuranbaju' => 'required',
            'Pilihanagama' => 'required',
            'Pilihanpernikahan' => 'required',
            'tinggalbersama' => 'required',
            'Alamat' => 'required',
            'Kodepos' => 'required|size:5',
            'RT_RW' => 'required',
            'd_kelurahan' => 'required',
            'Kecamatan' => 'required',
            'Kabupaten' => 'required',
            'Provinsi' => 'required',
            'Negara' => 'required',
            'notelp_hp' => 'required|min:10|max:15',
            'Email' => 'required|email:dns',
            'Namaperu' => 'nullable',
            'Alamatperu' => 'nullable',
            'Telp_perusahaan' => 'nullable',
            'Jabatan' => 'nullable',
        ];

        $messages = [
            'required' => 'Kolom :attribute wajib diisi',
            'unique' => ':attribute sudah terdaftar',
            'email' => 'Tolong masukkan alamat email yang valid',
            'size' => 'Kolom :attribute harus memiliki :size digit',
            'min' => 'Kolom :attribute harus memiliki minimal :min digit',
            'max' => 'Kolom :attribute harus memiliki maksimal :max digit',
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
            'Ukuranbaju' => 'ukuran baju',
            'Pilihanagama' => 'agama',
            'Pilihanpernikahan' => 'status pernikahan',
            'tinggalbersama' => 'tinggal bersama',
            'Alamat' => 'alamat',
            'Kodepos' => 'kode pos',
            'RT_RW' => 'RT-RW',
            'd_kelurahan' => 'desa/kelurahan',
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

        $form->update([
            'data' => array_merge($form->data, ['step1' => $validator])
        ]);

        // $pendaftar = Pendaftaran::create($validator);

        // session(['pendaftar_id' => $pendaftar->id]);
        // dd(redirect('/pendaftaran2'));
        return redirect('/pendaftaran2');
    }

    public function create2()
    {
        $formid = session('form_id');
        
        if (!$formid || !TemporaryForm::where('id', $formid)->exists()) {
            return redirect()->route('form.start');
        }
        
        $form = TemporaryForm::findOrFail($formid);

        $title = 'Identitas SMA/SMK Sederajat';
        return view('pendaftaran2', [
            'form' => $form,
            'title' => $title
        ]);
    }

    public function store2(Request $request) {
        $form = TemporaryForm::findOrFail(session('form_id'));

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

        $form->update([
            'data' => array_merge($form->data, ['step2' => $validator])
        ]);

        return redirect('/pendaftaran3');
    }

    public function create3()
    {
        $formid = session('form_id');
        
        if (!$formid || !TemporaryForm::where('id', $formid)->exists()) {
            return redirect()->route('form.start');
        }

        $form = TemporaryForm::findOrFail($formid);

        if(!isset($form->data['step2']) || empty($form->data['step2'])) {
            return redirect('/pendaftaran2');
        }

        $title = 'Identitas Orang Tua/Wali';
        return view('pendaftaran3', [
            'form' => $form,
            'title' => $title
        ]);
    }

    public function store3(Request $request) {
        $form = TemporaryForm::findOrFail(session('form_id'));

        $input = $request->all();

        $rules = [
            'NamaAyah' => 'required',
            'NIKayah' => 'required|size:16',
            'Tempatlayah' => 'required',
            'tgllayah' => 'required',
            'PilihanagamaA' => 'required',
            'PilihanpendtA' => 'required',
            'PilihanpekerA' => 'required',
            'PilihanpenghasilanA' => 'required',
            'nohpayah' => 'required|min:10|max:13',
            'PilihanstatA' => 'required',
            'NamaIbu' => 'required',
            'NIKibu' => 'required|size:16',
            'Tempatlibu' => 'required',
            'tgllibu' => 'required',
            'PilihanagamaI' => 'required',
            'PilihanpendtI' => 'required',
            'PilihanpekerI' => 'required',
            'PilihanpenghasilanI' => 'required',
            'nohpibu' => 'required|min:10|max:13',
            'PilihanstatI' => 'required',
            'NamaWali' => 'nullable',
            'NIKWali' => 'nullable|size:16',
            'Tempatlwali' => 'nullable',
            'PilihanagamaW' => 'nullable',
            'PilihanpendtW' => 'nullable',
            'PilihanpekerW' => 'nullable',
            'PilihanpenghasilanW' => 'nullable',
            'nohpwali' => 'nullable|min:10|max:13',
            'tgllwali' => 'nullable',
            'Alamatjalan' => 'required',
            'rt_rwortu' => 'required',
            'Kodepos_ortu' => 'required',
            'd_kelurahanortu' => 'required',
            'Kecamatan_ortu' => 'required',
            'kabupatenortu' => 'required',
            'Provinsiortu' => 'required',
            'nohportu' => 'required|min:10|max:10',
        ];

        $messages = [
            'required' => 'Kolom :attribute wajib diisi',
            'size' => 'Kolom :attribute harus memiliki :size digit',
            'min' => 'Kolom :attribute harus memiliki minimal :min digit',
            'max' => 'Kolom :attribute harus memiliki maksimal :max digit',
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
            'rt_rwortu' => 'RT/RW',
            'Kodepos_ortu' => 'kode pos',
            'd_kelurahanortu' => 'desa/kelurahan',
            'Kecamatan_ortu' => 'kecamatan',
            'kabupatenortu' => 'kabupaten',
            'Provinsiortu' => 'provinsi',
            'nohportu' => 'nomor handphone ortu',
        ]);

        
        if($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        }
        
        $validator = $validator->validate();

        $form->update([
            'data' => array_merge($form->data, ['step3' => $validator])
        ]);

        // dd(redirect('/uploadberkas'));

        return redirect('/uploadberkas');
    }

    public function create4()
    {
        $formid = session('form_id');

        if (!$formid || !TemporaryForm::where('id', $formid)->exists()) {
            return redirect()->route('form.start');
        }

        $form = TemporaryForm::findOrFail($formid);

        if(!isset($form->data['step3']) || empty($form->data['step3'])) {
            return redirect('/pendaftaran3');
        }

        $form = TemporaryForm::findOrFail($formid);

        $title = 'Upload Berkas Pendaftaran';
        return view('uploadberkas', [
            'form' => $form,
            'title' => $title
        ]);
    }

    public function store4(Request $request) {
        $form = TemporaryForm::findOrFail(session('form_id'));

        $input = $request->all();
        
        $rules = [
            'IjazahSMA' => 'required|file|max:5120|mimes:pdf|extensions:pdf',
            'SKHU' => 'required|file|max:5120|mimes:pdf|extensions:pdf',
            'FotocopyKK' => 'required|file|max:5120|mimes:pdf|extensions:pdf',
            'FotocopyKTP' => 'required|file|max:5120|mimes:pdf|extensions:pdf',
            'PasFoto' => 'required|image|max:5120|mimes:jpg,png,jpeg|extensions:jpg,png,jpeg',
            'BuktiPembayaran' => 'required|file|max:5120|mimes:pdf|extensions:pdf',
            'SuratKetSehat' => 'required|file|max:5120|mimes:pdf|extensions:pdf',
            'SuratKetBebasNarkoba' => 'required|file|max:5120|mimes:pdf|extensions:pdf',
            'SuratPernyataan' => 'required|file|max:5120|mimes:pdf|extensions:pdf',
        ];

        $messages = [
            'required' => 'Kolom :attribute wajib diisi',
            'file' => 'Kolom :attribute harus berupa file',
            'max' => 'Kolom :attribute harus berukuran maksimal 5mb',
            'mimes' => 'Jenis file harus dalam bentuk jpg, png, atau jpeg',
            'extensions' => 'Ekstensi file harus dalam bentuk :extension',
            'image' => 'Kolom :attribute harus berupa gambar'
        ];

        $validator = Validator::make($input, $rules, $messages, [
            'IjazahSMA' => 'ijazah SMA',
            'SKHU' => 'SKHU',
            'FotocopyKK' => 'fotocopy KK',
            'FotocopyKTP' => 'fotocopy KTP',
            'PasFoto' => 'pas foto',
            'BuktiPembayaran' => 'bukti pembayaran',
            'SuratKetSehat' => 'surat keterangan sehat',
            'SuratKetBebasNarkoba' => 'surat keterangan bebas narkoba',
            'SuratPernyataan' => 'surat pernyataan'
        ]);

        if($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $validator = $validator->validate();

        $validator['IjazahSMA'] = $request->file('IjazahSMA')->store('ijazah');
        $validator['SKHU'] = $request->file('SKHU')->store('skhu');
        $validator['FotocopyKK'] = $request->file('FotocopyKK')->store('kk');
        $validator['FotocopyKTP'] = $request->file('FotocopyKTP')->store('ktp');
        $validator['PasFoto'] = $request->file('PasFoto')->store('pas-foto');
        $validator['BuktiPembayaran'] = $request->file('BuktiPembayaran')->store('bukti-pembayaran');
        $validator['SuratKetSehat'] = $request->file('SuratKetSehat')->store('surat-ket-sehat');
        $validator['SuratKetBebasNarkoba'] = $request->file('SuratKetBebasNarkoba')->store('surat-ket-bebas-narkoba');
        $validator['SuratPernyataan'] = $request->file('SuratPernyataan')->store('surat-pernyataan');
        
        $form->update([
            'data' => array_merge($form->data, ['step4' => $validator])
        ]);

        Pendaftaran::create([
            'Namalengkap' => $form->data['step1']['Namalengkap'] ?? null,
            'Programstudi' => $form->data['step1']['Programstudi'] ?? null,
            'Pilihankelas' => $form->data['step1']['Pilihankelas'] ?? null,
            'NIK' => $form->data['step1']['NIK'] ?? null,
            'NPWP' => $form->data['step1']['NPWP'] ?? null,
            'NISN' => $form->data['step1']['NISN'] ?? null,
            'pilihanjk' => $form->data['step1']['pilihanjk'] ?? null,
            'Tempatlahir' => $form->data['step1']['Tempatlahir'] ?? null,
            'Tanggallahir' => $form->data['step1']['Tanggallahir'] ?? null,
            'Ukuranbaju' => $form->data['step1']['Ukuranbaju'] ?? null,
            'Pilihanagama' => $form->data['step1']['Pilihanagama'] ?? null,
            'Pilihanpernikahan' => $form->data['step1']['Pilihanpernikahan'] ?? null,
            'tinggalbersama' => $form->data['step1']['tinggalbersama'] ?? null,
            'Alamat' => $form->data['step1']['Alamat'] ?? null,
            'Kodepos' => $form->data['step1']['Kodepos'] ?? null,
            'RT_RW' => $form->data['step1']['RT_RW'] ?? null,
            'd_kelurahan' => $form->data['step1']['d_kelurahan'] ?? null,
            'Kecamatan' => $form->data['step1']['Kecamatan'] ?? null,
            'Kabupaten' => $form->data['step1']['Kabupaten'] ?? null,
            'Provinsi' => $form->data['step1']['Provinsi'] ?? null,
            'Negara' => $form->data['step1']['Negara'] ?? null,
            'notelp_hp' => $form->data['step1']['notelp_hp'] ?? null,
            'Email' => $form->data['step1']['Email'] ?? null,
            'Namaperu' => $form->data['step1']['Namaperu'] ?? null,
            'Alamatperu' => $form->data['step1']['Alamatperu'] ?? null,
            'Telp_perusahaan' => $form->data['step1']['Telp_perusahaan'] ?? null,
            'Jabatan' => $form->data['step1']['Jabatan'] ?? null,
            'Namasekolah' => $form->data['step2']['Namasekolah'] ?? null,
            'JurusanSekolah' => $form->data['step2']['JurusanSekolah'] ?? null,
            'Tahunlulus' => $form->data['step2']['Tahunlulus'] ?? null,
            'AlamatSekolah' => $form->data['step2']['AlamatSekolah'] ?? null,
            'KabupatenKota' => $form->data['step2']['KabupatenKota'] ?? null,
            'ProvinsiSekolah' => $form->data['step2']['ProvinsiSekolah'] ?? null,
            'NegaraSekolah' => $form->data['step2']['NegaraSekolah'] ?? null,
            'NamaAyah' => $form->data['step3']['NamaAyah'] ?? null,
            'NIKayah' => $form->data['step3']['NIKayah'] ?? null,
            'Tempatlayah' => $form->data['step3']['Tempatlayah'] ?? null,
            'tgllayah' => $form->data['step3']['tgllayah'] ?? null,
            'PilihanagamaA' => $form->data['step3']['PilihanagamaA'] ?? null,
            'PilihanpendtA' => $form->data['step3']['PilihanpendtA'] ?? null,
            'PilihanpekerA' => $form->data['step3']['PilihanpekerA'] ?? null,
            'PilihanpenghasilanA' => $form->data['step3']['PilihanpenghasilanA'] ?? null,
            'nohpayah' => $form->data['step3']['nohpayah'] ?? null,
            'PilihanstatA' => $form->data['step3']['PilihanstatA'] ?? null,
            'NamaIbu' => $form->data['step3']['NamaIbu'] ?? null,
            'NIKibu' => $form->data['step3']['NIKibu'] ?? null,
            'Tempatlibu' => $form->data['step3']['Tempatlibu'] ?? null,
            'tgllibu' => $form->data['step3']['tgllibu'] ?? null,
            'PilihanagamaI' => $form->data['step3']['PilihanagamaI'] ?? null,
            'PilihanpendtI' => $form->data['step3']['PilihanpendtI'] ?? null,
            'PilihanpekerI' => $form->data['step3']['PilihanpekerI'] ?? null,
            'PilihanpenghasilanI' => $form->data['step3']['PilihanpenghasilanI'] ?? null,
            'nohpibu' => $form->data['step3']['nohpibu'] ?? null,
            'PilihanstatI' => $form->data['step3']['PilihanstatI'] ?? null,
            'NamaWali' => $form->data['step3']['NamaWali'] ?? null,
            'NIKWali' => $form->data['step3']['NIKWali'] ?? null,
            'Tempatlwali' => $form->data['step3']['Tempatlwali'] ?? null,
            'tgllwali' => $form->data['step3']['tgllwali'] ?? null,
            'PilihanagamaW' => $form->data['step3']['PilihanagamaW'] ?? null,
            'PilihanpendtW' => $form->data['step3']['PilihanpendtW'] ?? null,
            'PilihanpekerW' => $form->data['step3']['PilihanpekerW'] ?? null,
            'PilihanpenghasilanW' => $form->data['step3']['PilihanpenghasilanW'] ?? null,
            'nohpwali' => $form->data['step3']['nohpwali'] ?? null,
            'Alamatjalan' => $form->data['step3']['Alamatjalan'] ?? null,
            'rt_rwortu' => $form->data['step3']['rt_rwortu'] ?? null,
            'Kodepos_ortu' => $form->data['step3']['Kodepos_ortu'] ?? null,
            'd_kelurahanortu' => $form->data['step3']['d_kelurahanortu'] ?? null,
            'Kecamatan_ortu' => $form->data['step3']['Kecamatan_ortu'] ?? null,
            'kabupatenortu' => $form->data['step3']['kabupatenortu'] ?? null,
            'Provinsiortu' => $form->data['step3']['Provinsiortu'] ?? null,
            'nohportu' => $form->data['step3']['nohportu'] ?? null,
            'IjazahSMA' => $form->data['step4']['IjazahSMA'] ?? null,
            'SKHU' => $form->data['step4']['SKHU'] ?? null,
            'FotocopyKK' => $form->data['step4']['FotocopyKK'] ?? null,
            'FotocopyKTP' => $form->data['step4']['FotocopyKTP'] ?? null,
            'PasFoto' => $form->data['step4']['PasFoto'] ?? null,
            'BuktiPembayaran' => $form->data['step4']['BuktiPembayaran'] ?? null,
            'SuratKetSehat' => $form->data['step4']['SuratKetSehat'] ?? null,
            'SuratKetBebasNarkoba' => $form->data['step4']['SuratKetBebasNarkoba'] ?? null,
            'SuratPernyataan' => $form->data['step4']['SuratPernyataan'] ?? null,
            'status' => 'completed',
        ]);

        $form->delete();
        session()->forget(['form_id']);

        return redirect('/home')->with('success', 'Pendaftaran berhasil!');
    }
}