<?php

namespace App\Http\Controllers;

use App\Models\Berkas;
use App\Models\OrangTua;
use App\Models\Pendaftaran;
use App\Models\SekolahAsal;

use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

use function PHPUnit\Framework\isEmpty;

class DashboardController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            new Middleware('permission:accept-surat-masuk|reject-surat-masuk|lihat-surat-masuk|lihat-berita', only: ['index', 'show']),
            new Middleware('permission:accept-surat-masuk', only: ['accept']),
            new Middleware('permission:reject-surat-masuk', only: ['reject']),
        ];
    }
    public function index ()
    {
        return view('dashboard', [
            'title' => 'Main',
            'mahasiswa' => Pendaftaran::where('status', 'completed')->get(),
            'countpendaftar' => Pendaftaran::where('status', 'accepted')->count(),
            'countrejected' => Pendaftaran::where('status', 'rejected')->count(),
        ]);
    }

    public function show($id) {
        if (!$id) {
            return redirect()->route('dashboard.index');
        }
        
        $data = Pendaftaran::find($id);
        // $sekolah = SekolahAsal::where('pendaftaran_id', $id)->first();
        // $ortu = OrangTua::where('pendaftaran_id', $id)->first();
        // $berkas = Berkas::where('pendaftaran_id', $id)->first();

        // $data = collect($pendaftaran)
        //     ->merge($sekolah ? $sekolah->toArray() : [])
        //     ->merge($ortu ? $ortu->toArray() : [])
        //     ->merge($berkas ? $berkas->toArray() : []);

        // dd($data);

        return response()->json($data);
    }

    public function accept($id) {
        $data = Pendaftaran::where('id', $id)->firstOrFail();
        $data->update(['status' => 'accepted']);
        return redirect()->back()->with('success', 'Berhasil diterima!');
    }
    
    public function reject($id) {
        $data = Pendaftaran::where('id', $id)->firstOrFail();
        $data->update(['status' => 'rejected']);
        return redirect()->back()->with('success', 'Berhasil ditolak!');
    }
}
