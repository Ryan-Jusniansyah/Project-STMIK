<?php

use App\Http\Controllers\PendaftaranController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('index');
});

Route::get('/pendaftaran1', [PendaftaranController::class, 'pendaftaran1']);

Route::get('/dosen', function () {
    return view('nama_dosen');
});

Route::get('/visi', function () {
    return view('visi_misi');
});