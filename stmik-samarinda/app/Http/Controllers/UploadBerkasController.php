<?php

namespace App\Http\Controllers;

use App\Models\Berkas;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;

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
        $validatedData = $request->validate([
            'IjazahSMA' => 'required|file|max:2048|mimes:pdf|extensions:pdf',
            'SKHU' => 'required|file|max:2048|mimes:pdf|extensions:pdf',
            'FotocopyKK' => 'required|file|max:2048|mimes:pdf|extensions:pdf',
            'FotocopyKTP' => 'required|file|max:2048|mimes:pdf|extensions:pdf',
            'PasFoto' => 'required|file|max:2048|mimes:pdf|extensions:pdf',
            'BuktiPembayaran' => 'required|file|max:2048|mimes:pdf|extensions:pdf',
            'SuratKetSehat' => 'required|file|max:2048|mimes:pdf|extensions:pdf',
            'SuratKetBebasNarkoba' => 'required|file|max:2048|mimes:pdf|extensions:pdf',
            'SuratPernyataan' => 'required|file|max:2048|mimes:pdf|extensions:pdf',
        ]);

        $validatedData['IjazahSMA'] = $request->file('IjazahSMA')->store('ijazah');
        $validatedData['SKHU'] = $request->file('SKHU')->store('skhu');
        $validatedData['FotocopyKK'] = $request->file('FotocopyKK')->store('kk');
        $validatedData['FotocopyKTP'] = $request->file('FotocopyKTP')->store('ktp');
        $validatedData['PasFoto'] = $request->file('PasFoto')->store('pas-foto');
        $validatedData['BuktiPembayaran'] = $request->file('BuktiPembayaran')->store('bukti-pembayaran');
        $validatedData['SuratKetSehat'] = $request->file('SuratKetSehat')->store('surat-ket-sehat');
        $validatedData['SuratKetBebasNarkoba'] = $request->file('SuratKetBebasNarkoba')->store('surat-ket-bebas-narkoba');
        $validatedData['SuratPernyataan'] = $request->file('SuratPernyataan')->store('surat-pernyataan');

        $validatedData['pendaftaran_id'] = session('pendaftar_id');
        
        session()->forget(['pendaftar_id']);

        // Berkas::create($validatedData);
        Berkas::updateOrCreate(
            ['pendaftaran_id' => $validatedData['pendaftaran_id']],
            $validatedData
        );
    }
}
