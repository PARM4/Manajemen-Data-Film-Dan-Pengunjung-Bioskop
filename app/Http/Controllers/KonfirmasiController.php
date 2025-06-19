<?php

namespace App\Http\Controllers;

use App\Models\pengunjungs;
use Illuminate\Http\Request;

class KonfirmasiController extends Controller
{
    public function index()
    {
        $pengunjung = pengunjungs::where('status', 'pending')->get();
        return view('konfirmasi', compact('pengunjung'));
    }

    public function konfirmasi($id)
    {
        $pengunjung = pengunjungs::findOrFail($id);
        $pengunjung->status = 'approved';
        $pengunjung->save();

        return back()->with('success', 'Pengunjung berhasil dikonfirmasi.');
    }
}
