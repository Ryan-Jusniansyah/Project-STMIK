<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
            'title' => 'Berita',
            'berita' => Berita::all()
        ]);
    }

    public function create(){
        return view('form-berita', [
            'title' => 'Berita',
        ]);
    }

    public function index1(){
        return view('index', [
            'title' => 'Beranda',
            'berita' => Berita::all()
        ]);
    }

    public function show($id){
        $berita = Berita::findOrFail($id);
        return view('halamanBerita', [
            'title' => $berita->title,
            'berita' => $berita
        ]);
    }

    public function edit($id){
        $berita = Berita::findOrFail($id);
        return view('form-edit', compact('berita'));
    }

    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'title' => 'required',
            'foto' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required'
        ]);

        $berita = Berita::findOrFail($id);

        if($request->hasFile('foto')){
            $image = $request->file('foto');
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images', $imagename);
            $validatedData['foto'] = $imagename;
        }

        $berita->update($validatedData);

        return redirect('/dashboard-berita')->with('Success', 'Berita berhasil diperbarui');
    }

    public function destroy($id){
        $berita = Berita::findOrFail($id);
        $berita->delete();

        return redirect('/dashboard-berita')->with('Success', 'Berita Berhasil dihapus');
    }
}
