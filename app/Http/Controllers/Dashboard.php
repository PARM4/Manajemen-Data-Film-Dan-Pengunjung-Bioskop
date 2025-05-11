<?php

namespace App\Http\Controllers;

use App\Models\films;
use App\Models\jadwals;
use App\Models\pengunjungs;
use App\Models\tikets;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    //LOGIN
    public function Login(){
        return view('login');
    }
    public function Masuk(){
        return redirect()->route('dashboard');
    }
    //AND LOGIN

    public function index(){
        return view('master');
    }

    //FILM
    public function Film()
    {
        $film = films::all();
        return view('film.Lihat', compact('film'));
    }
    public function TambahFilm()
    {
        return view('Film.Tambah');
    }
    public function SimpanFilm(Request $request)
    {
        films::create($request->all());
        return redirect()->route('film');
    }
    public function HapusFilm($id)
    {
        films::where('id', $id)->delete();
        return redirect()->route('film')->with('Success');
    }

    //PENGUNJUNG
    public function Pengunjung(){
        $pengunjung = pengunjungs::all();
        return view('pengunjung.Lihat',compact('pengunjung'));
    }
    public function TambahPengunjung(){
        return view('Pengunjung.Tambah');
    }
    public function SimpanPengunjung(Request $request){
        pengunjungs::create($request->all());
        return redirect()->route('pengunjung');
    }
    public function HapusPengunjung($id){
        pengunjungs::where('id',$id)->delete();
        return redirect()->route('pengunjung')->with('Success');
    }
    //
    
    //JADWAL
    public function Jadwal(){
        $jadwal = jadwals::with('films')->get();
        return view('jadwal.Lihat',compact('jadwal'));
    }
    public function TambahJadwal(){
        $film = films::all();
        return view('Jadwal.Tambah',compact('film'));
    }
    public function SimpanJadwal(Request $request){
        jadwals::create($request->all());
        return redirect()->route('jadwal');
    }
    public function HapusJadwal($id){
        jadwals::where('id',$id)->delete();
        return redirect()->route('jadwal')->with('Success');
    }
    //
    
    //TIKET
    public function Tiket(){
        $tiket = tikets::with('jadwals.films')->get();
        return view('tiket.Lihat',compact('tiket'));
    }
    public function TambahTiket(){
        return view('Tiket.Tambah');
    }
    public function SimpanTiket(Request $request){
        tikets::create($request->all());
        return redirect()->route('tiket');
    }
    public function HapusTiket($id){
        tikets::where('id',$id)->delete();
        return redirect()->route('tiket')->with('Success');
    }

}
