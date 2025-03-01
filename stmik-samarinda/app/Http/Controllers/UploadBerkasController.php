<?php

namespace App\Http\Controllers;

use App\Models\Berkas;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UploadBerkasController extends Controller
{
    public function create(){
        $pendaftaran_id = session('pendaftar_id');

        if (!$pendaftaran_id || !Pendaftaran::where('id', $pendaftaran_id)->exists()) {
            return redirect('/pendaftaran1');
        }
        
        $title = 'Upload Berkas Pendaftaran';
        return view('uploadberkas', compact('title'));
    }

    public function store(Request $request){
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
            'max' => 'Kolom :attribute harus berukuran maksimal :max',
            'mimes' => 'Jenis file harus dalam bentuk :mime',
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

        // $validatedData = $request->validate([
        //     'IjazahSMA' => 'required|file|max:2048|mimes:pdf|extensions:pdf',
        //     'SKHU' => 'required|file|max:2048|mimes:pdf|extensions:pdf',
        //     'FotocopyKK' => 'required|file|max:2048|mimes:pdf|extensions:pdf',
        //     'FotocopyKTP' => 'required|file|max:2048|mimes:pdf|extensions:pdf',
        //     'PasFoto' => 'required|image|max:2048|mimes:jpg,png,jpeg|extensions:jpg,png,jpeg',
        //     'BuktiPembayaran' => 'required|file|max:2048|mimes:pdf|extensions:pdf',
        //     'SuratKetSehat' => 'required|file|max:2048|mimes:pdf|extensions:pdf',
        //     'SuratKetBebasNarkoba' => 'required|file|max:2048|mimes:pdf|extensions:pdf',
        //     'SuratPernyataan' => 'required|file|max:2048|mimes:pdf|extensions:pdf',
        // ]);

        $validator['IjazahSMA'] = $request->file('IjazahSMA')->store('ijazah');
        $validator['SKHU'] = $request->file('SKHU')->store('skhu');
        $validator['FotocopyKK'] = $request->file('FotocopyKK')->store('kk');
        $validator['FotocopyKTP'] = $request->file('FotocopyKTP')->store('ktp');
        $validator['PasFoto'] = $request->file('PasFoto')->store('pas-foto');
        $validator['BuktiPembayaran'] = $request->file('BuktiPembayaran')->store('bukti-pembayaran');
        $validator['SuratKetSehat'] = $request->file('SuratKetSehat')->store('surat-ket-sehat');
        $validator['SuratKetBebasNarkoba'] = $request->file('SuratKetBebasNarkoba')->store('surat-ket-bebas-narkoba');
        $validator['SuratPernyataan'] = $request->file('SuratPernyataan')->store('surat-pernyataan');

        $validator['pendaftaran_id'] = session('pendaftar_id');
        
        session()->forget(['pendaftar_id']);

        // Berkas::create($validatedData);
        Berkas::updateOrCreate(
            ['pendaftaran_id' => $validator['pendaftaran_id']],
            $validator
        );
    }
}
