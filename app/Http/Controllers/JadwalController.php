<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index()
    {
        $jadwal = Jadwal::with('film')->get();
        return view('Jadwal.lihat', compact('jadwal'));
    }
    public function create()
    {
        $film = Film::all(); //with('film')->get();
        return view('Jadwal.tambah', compact('film'));
    }
    public function store(Request $request)
    {
        Jadwal::create($request->all());
        return redirect()->route('jadwal.index');
    }
    public function edit($id)
    {
        $jadwal = Jadwal::findOrFail($id);
        return view('Jadwal.edit', compact('jadwal'));
    }
    public function update(Request $request, $id)
    {
        $jadwal = Jadwal::findOrFail($id);

        $jadwal->update([
            'id_film' => $request->id_film,
            'ruangan' => $request->ruangan,
            'show_date' => $request->show_date,
            'show_time' => $request->show_time,

        ]);
        return redirect()->route('jadwal.index')->with('Sucses', 'Data Jadwal Berhasil Diupdate');
    }
    public function destroy($id)
    {
        Jadwal::destroy($id);
        return back()->with('success', 'Jadwal dihapus!');
    }
}
