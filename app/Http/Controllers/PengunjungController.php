<?php

namespace App\Http\Controllers;

use App\Models\pengunjungs;
use Illuminate\Http\Request;

class PengunjungController extends Controller
{
    public function index()
    {
        $pengunjung = pengunjungs::all();
        return view('Pengunjung.lihat', compact('pengunjung'));
    }
    public function create()
    {
        $pengunjung = pengunjungs::all();
        return view('Pengunjung.tambah', compact('pengunjung'));
    }
    public function store(Request $request)
    {
        pengunjungs::create($request->all());
        return redirect()->route('pengunjung.index');
    }
    public function edit($id)
    {
        $pengunjung = pengunjungs::findOrFail($id);
        return view('Pengunjung.edit', compact('pengunjung'));
    }
    public function update(Request $request, $id)
    {
        $pengunjung = pengunjungs::findOrFail($id);

        $pengunjung->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => $request->password,

        ]);
        return redirect()->route('pengunjung.index')->with('Sucses', 'Data Pengunjung Berhasil Diupdate');
    }
    public function destroy($id)
    {
        pengunjungs::destroy($id);
        return back()->with('success', 'Pengunjung dihapus!');
    }
}
