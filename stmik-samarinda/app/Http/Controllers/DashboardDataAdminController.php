<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class DashboardDataAdminController extends Controller
{    
    public function index()
    {
        // return Pendaftaran::all();
        return view('dashboardDataAdmin', [
            'title' => 'Data Admin',
            
        ]);
    }
}
