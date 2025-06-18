<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Jadwal;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Controller
{
    public function index()
    {
        $jumlahFilm = Film::count();
        $jumlahPengunjung = User::where('role', 'pengunjung')->count();
        $jumlahStaf = User::where('role', 'staf')->count();

        $pagi = Jadwal::whereBetween('show_time', ['06:00:00', '11:59:59'])->count();
        $siang = Jadwal::whereBetween('show_time', ['12:00:00', '17:59:59'])->count();
        $malam = Jadwal::whereBetween('show_time', ['18:00:00', '23:59:59'])->count();
        $jadwalHariIni = Jadwal::whereDate('created_at', Carbon::today())->get();

        return view('dashboard', compact(
            'jumlahFilm',
            'jumlahPengunjung',
            'jumlahStaf',
            'pagi',
            'siang',
            'malam',
            'jadwalHariIni'
        ));
    }
}