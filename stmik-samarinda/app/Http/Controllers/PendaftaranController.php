<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendaftaranController extends Controller{
    Public function pendaftaran1()
    {
        $title = 'Identitas Data Diri & Program Studi';
        return view('pendaftaran1', compact('title'));
    }
}