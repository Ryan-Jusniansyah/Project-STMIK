<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isEmpty;

class DashboardController extends Controller
{
    public function index ()
    {
        // $mhs = Pendaftaran::all();
        // dd($mhs->isEmpty());
        return view('dashboard', [
            'title' => 'Main',
            'mahasiswa' => Pendaftaran::all(),
        ]);
    }
}
