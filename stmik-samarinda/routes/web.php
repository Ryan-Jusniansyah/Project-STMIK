<?php

use App\Http\Controllers\DashboardBeritaController;
use App\Models\Pendaftaran;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\DashboardDataMahasiswaController;
use App\Http\Controllers\OrangTuaController;
use App\Http\Controllers\SekolahAsalController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\UploadBerkasController;
use App\Models\SekolahAsal;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('index', ['title' => 'Beranda']);
});

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/berita', function () {
    return view('halamanBerita', ['title' => 'Halaman Berita']);
});

Route::get('/visimisi', function(){
    return view('visi_misi', ['title' => 'Visi Misi']);
});

Route::get('/Dosen_STMIK', function() {
    return view('nama_dosen', ['title' => 'Dosen STMIK']);
});

// Route::get('/dashboard-berita', [DashboardBeritaController::class, 'index']);
// Route::get('/dashboard-berita', dd('hi'));

Route::get('/login', function () {
    return view('login', ['title' => 'Halaman Login']);
});

Route::get('/form-berita', function () {
    return view('form-berita', ['title' => 'Form Berita']);
});

Route::get('/pendaftaran1', [PendaftaranController::class, 'pendaftaran1']);
Route::post('/pendaftaran1', [PendaftaranController::class, 'store1']);

// Route::get('/uploadberkas', [PendaftaranController::class, 'uploadberkas']);
Route::get('/uploadberkas', [UploadBerkasController::class, 'create']);
Route::post('/uploadberkas', [UploadBerkasController::class, 'store']);

// Route::get('/pendaftaran2', [PendaftaranController::class, 'pendaftaran2']);
// Route::post('/pendaftaran2', [PendaftaranController::class, 'store2']);
Route::get('/pendaftaran2', [SekolahAsalController::class, 'create']);
Route::post('/pendaftaran2', [SekolahAsalController::class, 'store']);

// Route::get('/pendaftaran3', [PendaftaranController::class, 'pendaftaran3']); 
// Route::post('/pendaftaran3', [PendaftaranController::class, 'store3']);
Route::get('/pendaftaran3', [OrangTuaController::class, 'create']);
Route::post('/pendaftaran3', [OrangTuaController::class, 'store']);

Route::get('/dashboard-Data', [DashboardDataMahasiswaController::class, 'index']);

Route::post('/form-berita', [BeritaController::class, 'store']);
Route::get('/dashboard-berita', [BeritaController::class, 'index']);
Route::get('/form-berita/{id}/edit', [BeritaController::class, 'edit']);
Route::put('/form-berita/{id}', [BeritaController::class, 'update']);
Route::delete('/form-berita/{id}', [BeritaController::class, 'destroy']);
