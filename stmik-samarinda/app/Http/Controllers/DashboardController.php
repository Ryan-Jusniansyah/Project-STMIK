<?php

namespace App\Http\Controllers;

use App\Models\OrangTua;
use App\Models\Pendaftaran;
use App\Models\SekolahAsal;
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

    public function show($id) {
        if (!$id) {
            return redirect()->route('dashboard.index');
        }
        
        $pendaftaran = Pendaftaran::find($id);
        $sekolah = SekolahAsal::where('pendaftaran_id', $id)->first();
        $ortu = OrangTua::where('pendaftaran_id', $id)->first();

        $data = collect($pendaftaran)
            ->merge($sekolah ? $sekolah->toArray() : [])
            ->merge($ortu ? $ortu->toArray() : []);

        // dd($data);

        return response()->json($data);
    }
}
