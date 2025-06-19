<?php

namespace App\Http\Controllers;

use App\Models\pengunjungs;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function Login()
    {
        return view('login');
    }
    public function Autentication(Request $request)
    {
        $credentials = $request->only('email','password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user();

            if ($user->role === 'admin' || $user->role === 'staf') {
                return redirect()->route('dashboard');
            }
            elseif($user->role ==='pengunjung'){
                return redirect()->route('film.index');
            }
            return redirect()->intended('dashboard');

        } 
        return back()->withErrors([
            'email' => 'email atau password salah',
        ])->onlyInput('email');
    }
    public function fromregister()
    {
        return view('register');
    }
    public function register(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);

        DB::beginTransaction();

        try {
            // Simpan ke tabel users
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'role' => $request->role
            ]);

            // Jika role adalah pengunjung, simpan juga ke tabel pengunjungs
            if ($request->role === 'pengunjung') {
                pengunjungs::create([
                    'user_id' => $user->id,
                    'nama' => $request->name,
                    'email' => $request->email,
                    'password' => bcrypt($request->password),
                    'status' => 'pending'
                ]);
            }

            DB::commit();

            return redirect()->route('login')->with('success', 'Akun berhasil dibuat. Tunggu konfirmasi admin.');
        
        } catch (\Exception $e) {
            DB::rollback();

            return back()->with('error', 'Gagal registrasi: ' . $e->getMessage());
        }
    }

    public function Logout(Request $request){
        Auth::logout();

        // $request->session()->invalidate();
        // $request->session()->regenerateToken();
        return redirect('login');
    }

}
