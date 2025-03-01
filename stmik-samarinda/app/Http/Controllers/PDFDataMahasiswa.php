<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;
use App\Models\OrangTua;
use App\Models\SekolahAsal;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFDataMahasiswa extends Controller
{
    public function downloadPDF($id){
        $pendaftaran = Pendaftaran::findOrFail($id);

        $orangtua = OrangTua::where('pendaftaran_id', $id)->first();

        $asal_sekolah = SekolahAsal::where('pendaftaran_id', $id)->get();

        $pdf = Pdf::loadView('Biodata_mahasiswa_baru', compact('pendaftaran', 'orangtua', 'asal_sekolah'));

        return $pdf->download('Biodata_mahasiswa_baru_'.$id.'.pdf');
    }
}
