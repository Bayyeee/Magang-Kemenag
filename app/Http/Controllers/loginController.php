<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Log;

class loginController extends Controller
{
    public function showLoginForm()
    {
        if (Auth::check()) {
            $user = Auth::user();
            Log::info('User role saat ini: ' . $user->role);

            if ($user->role == 'admin' || $user->role == 'humas') {
                return redirect('/homeAdmin');
            } elseif ($user->role == 'pengaju') {
                return redirect('/home');
            } else {
                return redirect('/');
            }
        }

        return view('auth.login');
    }

    public function postlogin(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();
            Log::info('User berhasil login dengan role: ' . $user->role);

            if ($user->role == 'admin' || $user->role == 'humas') {
                return redirect('/homeAdmin');
            } elseif ($user->role == 'pengaju') {
                return redirect('/profile');
            } else {
                return redirect('/');
            }
        }

        Alert::error('Gagal Login', 'Email / Password Salah!!!');
        return redirect("/login");
    }

    // ** Untuk Logout
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect("/");
    }
}
