<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFDataMahasiswa extends Controller
{
    public function downloadPDF($id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);

        $pdf = Pdf::loadView('Biodata_mahasiswa_baru', compact('pendaftaran'));

        return $pdf->download('Biodata_mahasiswa_'. $pendaftaran->id .'.pdf');
    }
}
