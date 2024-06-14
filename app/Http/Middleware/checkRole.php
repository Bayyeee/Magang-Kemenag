<?php

namespace App\Http\Middleware;

use Closure;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


class checkRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, ...$roles)
    {
        if(auth()->check() && auth()->user()->role == 'pengaju') {
            return $next($request);
        }

        // Jika pengguna bukan 'users', arahkan mereka ke halaman lain
        Alert::error('Error', 'Halaman Tidak Ditemukan!!!');
        return redirect()->route('home');
    }
}
