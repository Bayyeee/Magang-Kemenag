<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class checkRoles
{
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        // Log role yang dicek
        Log::info('Roles yang dicek: ', ['roles' => $roles]);

        // Periksa apakah pengguna sudah login
        if (!$request->user()) {
            return redirect('/login');
        }

        // Ambil role pengguna dari request
        $userRole = $request->user()->role;
        Log::info('Role pengguna: ' . $userRole);

        // Cek apakah role pengguna termasuk dalam roles yang diperlukan
        if (in_array($userRole, $roles)) {
            Log::info('Role sesuai, lanjutkan ke halaman');
            return $next($request);
        }

        // Jika role tidak sesuai, redirect ke halaman lain atau berikan respons yang sesuai
        Log::info('Role tidak sesuai, redirect');
        return redirect('/home'); // Ganti '/home' dengan rute yang sesuai untuk kasus ini
    }
}
