<?php

use App\Http\Controllers\PendaftaranController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('index', ['title' => 'Beranda']);
});

Route::get('/dashboard', function () {
    return view('dashboard', ['title' => 'Dashboard']);
});

Route::get('/berita', function () {
    return view('halamanBerita');
});

Route::get('/visimisi', function(){
    return view('visi_misi');
});

Route::get('/Dosen_STMIK', function() {
    return view('nama_dosen');
});

Route::get('/dashboard-berita', function () {
    return view('dashboard_berita');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/form-berita', function () {
    return view('form-berita');
});

Route::get('/pendaftaran1', [PendaftaranController::class, 'pendaftaran1']);
Route::post('/pendaftaran1', [PendaftaranController::class, 'store']);

Route::get('/uploadberkas', [PendaftaranController::class, 'uploadberkas']);

Route::get('/pendaftaran2', [PendaftaranController::class, 'pendaftaran2']);

Route::get('/pendaftaran3', [PendaftaranController::class, 'pendaftaran3']);

Route::get('/dashboard-Data', function () {
    return view('dashboardDataMahasiswa');
});
