<?php

namespace App\Http\Controllers;

use App\Models\jadwals;
use App\Models\pengunjungs;
use App\Models\tikets;
use Illuminate\Http\Request;

class TiketController extends Controller
{
    public function index()
    {
        $tiket = tikets::with(['pengunjung', 'jadwal'])->get();
        return view('Tiket.lihat', compact('tiket'));
    }
    public function create()
    {
        $jadwal = jadwals::all(); 
        $pengunjung = pengunjungs::all(); 

        return view('Tiket.tambah', compact('jadwal', 'pengunjung'));
    }
    public function store(Request $request)
    {
        tikets::create($request->all());
        return redirect()->route('tiket.index');
    }
    public function edit($id)
    {
        $jadwal = jadwals::all();
        $pengunjung = pengunjungs::all();
        $tiket = tikets::findOrFail($id);
        return view('Tiket.edit', compact('tiket','jadwal','pengunjung'));
    }
    public function update(Request $request, $id)
    {
        $tiket = tikets::findOrFail($id);

        $tiket->update([
            'id_pengunjung' => $request->id_pengunjung,
            'id_jadwal' => $request->id_jadwal,
            'harga' => $request->harga,
        ]);
        return redirect()->route('tiket.index')->with('Sucses', 'Data Tiket Berhasil Diupdate');
    }
    public function destroy($id)
    {
        tikets::destroy($id);
        return back()->with('success', 'Tiket dihapus!');
    }
}
