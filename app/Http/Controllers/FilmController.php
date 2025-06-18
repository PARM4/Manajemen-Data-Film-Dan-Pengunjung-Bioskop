<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index(){
        $film = Film::all();
        return view('Film.lihat',compact('film'));
    }
    public function create(){
        return view('Film.tambah');
    }
    public function store(Request $request){
        Film::create($request->all());
        return redirect()->route('film.index');
    }
    public function edit($id) {
        $film = Film::findOrFail($id);
        return view('film.edit', compact('film'));
    }
    public function update(Request $request, $id) {
        $film = Film::findOrFail($id);
        
        $film->update([
            'title'=>$request->title,
            'genre'=>$request->genre,
            'durasi'=>$request->durasi,

        ]);
        return redirect()->route('film.index')->with('Sucses', 'Data Film Berhasil Diupdate');
    }
    public function destroy($id) {
        Film::destroy($id);
        return back()->with('success', 'Film dihapus!');
    }
}
