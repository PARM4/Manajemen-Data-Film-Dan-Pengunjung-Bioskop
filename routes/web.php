<?php

use App\Http\Controllers\Dashboard;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function(){
   return view('dashboard');
})->name('dashboard');

//ROLE
Route::get('/login',[Dashboard::class,'Login'])->name('login');
Route::post('/masuk', [Dashboard::class, 'Masuk'])->name('masuk');
//

//FILM
 Route::get('/film',[Dashboard::class,'Film'])->name('film');
 Route::get('/tambahfilm',[Dashboard::class, 'TambahFilm'])->name('tambahfilm');
 Route::post('/simpanfilm',[Dashboard::class, 'SimpanFilm'])->name('simpanfilm');
 Route::delete('/hapusfilm/{id}',[Dashboard::class, 'HapusFilm'])->name('hapusfilm');

 //PEGUNJUNG
 Route::get('/pengunjung',[Dashboard::class,'Pengunjung'])->name('pengunjung');
 Route::get('/tambahpengunjung',[Dashboard::class, 'TambahPengunjung'])->name('tambahpengunjung');
 Route::post('/simpanpengunjung',[Dashboard::class, 'SimpanPengunjung'])->name('simpanpengunjung');
 Route::delete('/hapuspengunjung/{id}',[Dashboard::class, 'HapusPengunjung'])->name('hapuspengunjung');
 
 //JADWAL
 Route::get('/jadwal',[Dashboard::class,'Jadwal'])->name('jadwal');
 Route::get('/tambahjadwal',[Dashboard::class, 'TambahJadwal'])->name('tambahjadwal');
 Route::post('/simpanjadwal',[Dashboard::class, 'SimpanJadwal'])->name('simpanjadwal');
 Route::delete('/hapusjadwal/{id}',[Dashboard::class, 'HapusJadwal'])->name('hapusjadwal');
 
 //TIKET
 Route::get('/tiket',[Dashboard::class,'Tiket'])->name('tiket');
 Route::get('/tambahtiket',[Dashboard::class, 'TambahTiket'])->name('tambahtiket');
 Route::post('/simpantiket',[Dashboard::class, 'SimpanTiket'])->name('simpantiket');
 Route::delete('/hapustiket/{id}',[Dashboard::class, 'HapusTiket'])->name('hapustiket');