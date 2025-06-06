<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $roles): Response
    {
        if(!Auth::check()){
            return redirect('/login');
        }
        $user = Auth::user();
        $rolesArray = explode('|', $roles);
        if(in_array($user->role,$rolesArray)){
            return $next($request);
        }
        return abort(403,'Kamu Tidak Memiliki Akses.');
    }
}
