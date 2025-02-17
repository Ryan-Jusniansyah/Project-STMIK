<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function store(Request $request){
        $validatedData = $request->validate([
            'title' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required'
        ]);

        if($request->hasFile('foto')){
            $image = $request->file('foto');

            $imagename = time() . '.' . $image->getClientOriginalExtension();

            $image->storeAs('public/images', $imagename);

            $validatedData['foto'] = $imagename;
        }
        
        Berita::create($validatedData);

        return redirect('/dashboard-berita')->with('Success', 'Berita berhasil ditambahkan');
    }

    public function index(){
        return view('dashboard_berita', [
            'berita' => Berita::all()
        ]);
    }
}
