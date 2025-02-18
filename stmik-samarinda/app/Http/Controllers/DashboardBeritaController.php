<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardBeritaController extends Controller
{
    public function index ()
    {
        return view('dashboard_berita', [
            'title' => 'Berita',
        ]);
    }
}
