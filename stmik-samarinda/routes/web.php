<?php

use App\Http\Controllers\PendaftaranController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('index');
});

Route::get('/berita', function () {
    return view('halamanBerita');
});

Route::get('/uploadberkas', function () {
    return view('uploadberkas');
});