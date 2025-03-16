<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class DashboardDataMahasiswaController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            new Middleware('permission:accept-surat-masuk|reject-surat-masuk|lihat-pendaftar|print-data-pendaftar', only: ['index']),
            new Middleware('permission:print-data-pendaftar', only: ['print']),
        ];
    }
    
    public function index()
    {
        $mahasiswa = Pendaftaran::where('status', 'accepted')->get();
        $title = 'Data Mahasiswa';
        return view('dashboardDataMahasiswa', compact('title', 'mahasiswa'));
    }
}
