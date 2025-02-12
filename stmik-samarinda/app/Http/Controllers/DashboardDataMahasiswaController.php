<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class DashboardDataMahasiswaController extends Controller
{
    public function index()
    {
        // return Pendaftaran::all();
        return view('dashboardDataMahasiswa', [
            'mahasiswa' => Pendaftaran::all()
        ]);
    }
}
