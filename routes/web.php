<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KonfirmasiController;
use App\Http\Controllers\PengunjungController;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [Dashboard::class, 'index'])->name('dashboard');


Route::get('/login', [AuthController::class, 'Login'])->name('login');
Route::post('/login', [AuthController::class, 'Autentication']);
Route::get('/register', [AuthController::class, 'fromregister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.store');
Route::get('/logout', [AuthController::class, 'Logout']);

// Admin: akses penuh
Route::middleware(['auth'])->group(function () {
    if ('role:admin,staf') {
        Route::resource('film', FilmController::class);
        Route::resource('jadwal', JadwalController::class);
        Route::resource('pengunjung', PengunjungController::class);
        Route::resource('tiket', TiketController::class);
        Route::resource('user', UserController::class);
        Route::get('/konfirmasi', [KonfirmasiController::class, 'index'])->name('konfirmasi.index');
        Route::patch('/konfirmasi/{id}', [KonfirmasiController::class, 'konfirmasi'])->name('konfirmasi.konfirmasi');
    } else if ('role:pengunjung') {
        Route::resource('film', FilmController::class)->only(['index']);
        Route::resource('jadwal', JadwalController::class)->only(['index']);
        Route::resource('tiket', TiketController::class)->only(['index']);
    }
});
