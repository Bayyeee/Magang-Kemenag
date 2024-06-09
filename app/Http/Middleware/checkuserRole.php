<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use RealRashid\SweetAlert\Facades\Alert;

class checkuserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        if(auth()->check() && auth()->user()->level == 'users') {
            return $next($request);
        }

        // Jika pengguna bukan 'users', arahkan mereka ke halaman lain
        Alert::error('Error', 'Halaman Tidak Ditemukan!!!');
        return redirect()->route('home');
    }
}
