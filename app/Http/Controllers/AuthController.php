<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            
            if($user->role === 'admin | sataf'){
                return redirect()->route('dashboard');
            }
            // elseif($user->role ==='staf'){
            //     return redirect()->route('dashboard');
            // }
            return redirect()->intended('dashboard');

        } 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function Logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('login');
    }

}
