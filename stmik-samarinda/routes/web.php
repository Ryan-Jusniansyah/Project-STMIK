<?php

use App\Models\Pendaftaran;
use App\Models\SekolahAsal;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrangTuaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\SekolahAsalController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\UploadBerkasController;
use App\Http\Controllers\DashboardBeritaController;
use App\Http\Controllers\DashboardDataMahasiswaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('index', ['title' => 'Beranda']);
});

Route::get('/berita', function () {
    return view('halamanBerita', ['title' => 'Halaman Berita']);
});

Route::get('/visimisi', function(){
    return view('visi_misi', ['title' => 'Visi Misi']);
});

Route::get('/Dosen_STMIK', function() {
    return view('nama_dosen', ['title' => 'Dosen STMIK']);
});

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);

// Route::get('/form-berita', function () {
//     return view('form-berita', ['title' => 'Form Berita']);
// });

Route::get('/pendaftaran1', [PendaftaranController::class, 'pendaftaran1']);
Route::post('/pendaftaran1', [PendaftaranController::class, 'store1']);

Route::get('/uploadberkas', [UploadBerkasController::class, 'create']);
Route::post('/uploadberkas', [UploadBerkasController::class, 'store']);

Route::get('/pendaftaran2', [SekolahAsalController::class, 'create']);
Route::post('/pendaftaran2', [SekolahAsalController::class, 'store']);

Route::get('/pendaftaran3', [OrangTuaController::class, 'create']);
Route::post('/pendaftaran3', [OrangTuaController::class, 'store']);

// DASHBOARD
Route::middleware('auth')->group(function() {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/dashboard-Data', [DashboardDataMahasiswaController::class, 'index']);
    Route::get('/dashboard-berita', [BeritaController::class, 'index']);
    
    Route::get('/form-berita', function() {
        abort(404);
    });
    
    Route::post('/form-berita', [BeritaController::class, 'store']);
    Route::get('/form-berita/{id}/edit', [BeritaController::class, 'edit']);
    Route::put('/form-berita/{id}', [BeritaController::class, 'update']);
    Route::delete('/form-berita/{id}', [BeritaController::class, 'destroy']);
});

Route::post('/logout', [LoginController::class, 'logout']);