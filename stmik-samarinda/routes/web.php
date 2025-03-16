<?php

use App\Models\Berita;
use App\Models\Pendaftaran;
use App\Models\SekolahAsal;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PDFDataMahasiswa;
use App\Http\Controllers\OrangTuaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\SekolahAsalController;
use App\Http\Controllers\UploadBerkasController;
use App\Http\Controllers\DashboardBeritaController;
use App\Http\Controllers\DashboardDataAdminController;
use App\Http\Controllers\DashboardDataMahasiswaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('index', [
        'title' => 'Beranda',
        'berita' => Berita::all()
    ]);
});

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/visimisi', function(){
    return view('visi_misi', ['title' => 'Visi Misi']);
});

Route::get('/Dosen_STMIK', function() {
    return view('nama_dosen', ['title' => 'Dosen STMIK']);
});

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/pendaftaran', [PendaftaranController::class, 'start'])->name('form.start');
Route::get('/pendaftaran1', [PendaftaranController::class, 'create1'])->name('form.step1');
Route::post('/pendaftaran1', [PendaftaranController::class, 'store1']);

Route::get('/uploadberkas', [PendaftaranController::class, 'create4']);
Route::post('/uploadberkas', [PendaftaranController::class, 'store4']);

Route::get('/pendaftaran2', [PendaftaranController::class, 'create2']);
Route::post('/pendaftaran2', [PendaftaranController::class, 'store2']);

Route::get('/pendaftaran3', [PendaftaranController::class, 'create3']);
Route::post('/pendaftaran3', [PendaftaranController::class, 'store3']);

// DASHBOARD
Route::middleware(['auth', 'verified'])->group(function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/dashboard-Data', [DashboardDataMahasiswaController::class, 'index']);
    Route::get('/dashboard-berita', [BeritaController::class, 'index']);
    
    Route::get('/dashboard/{id}/accept', [DashboardController::class, 'accept'])->name('dashboard.accept');
    Route::get('/dashboard/{id}/reject', [DashboardController::class, 'reject'])->name('dashboard.reject');

    Route::get('dashboard/{id}', [DashboardController::class, 'show'])->name('dashboard.show');
    
    Route::post('/form-berita', [BeritaController::class, 'store']);
    Route::get('/dashboard-berita', [BeritaController::class, 'index']);
    Route::get('/form-berita/{id}/edit', [BeritaController::class, 'edit']);
    Route::put('/form-berita/{id}', [BeritaController::class, 'update']);
    
    Route::post('/form-berita', [BeritaController::class, 'store']);
    Route::get('/form-edit/{id}/edit', [BeritaController::class, 'edit']);
    Route::put('/form-edit/{id}', [BeritaController::class, 'update']);
    Route::delete('/form-berita/{id}', [BeritaController::class, 'destroy']);
    
    Route::get('/form-berita', [BeritaController::class, 'create']);

    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
});

Route::get('/berita/{id}', [BeritaController::class, 'show']);

Route::get('/download-pdf/{id}', [PDFDataMahasiswa::class, 'downloadPDF']);
Route::get('/dashboard-berita/search', [BeritaController::class, 'search'])->name('berita.search');

Route::get('/download/{filename}', function ($filename) {
    $path = public_path('doc/' . $filename);
    
    if (file_exists($path)) {
        return response()->download($path);
    }
    
    abort(404, 'File tidak ditemukan');
})->name('download.file');

Route::post('/logout', [LoginController::class, 'logout']);

// Route::get('/admin', function() {
//     return 'hi admin';
// })->middleware(['auth', 'verified', 'role:admin']);