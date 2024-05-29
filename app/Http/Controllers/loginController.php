<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
// use Alert;

class loginController extends Controller
{

    // ** Menampilkan Halaman Login
    // public function halamanLogin(Request $request){
    //     return view("login.login");
    // }
    public function postlogin(Request $request){


        // ** TESTING DATA
        // dd($request->all());

        // ** AUTHENCATION MENYESUAIKAN DENGAN AUTH USER YANG ADA DI DATABASE
        if (Auth::attempt($request->only("email","password"))) {
            return redirect("/home");
        }
        Alert::error('Gagal Login', 'Email / Password Salah!!!');
        return redirect("/login");
    }

    // ** UNTUK LOGOUT
    public function logout(Request $request){
        Auth::logout();
        return redirect("/");
    }

    // ** CHECK USER AGAR TIDAK BISA KEMBALI LAGI KE HALAMAN /LOGIN JIKA TELAH BERADA DI HALAMAN /HOME SERTA INI UNTUK MENAMPILKAN HALAMAN LOGIN
    public function login() {

        if (Auth::check()) {
            Alert::error('Error', 'Halaman Tidak Ditemukan!!!');
            return redirect('/home');
        }
        return view('login.login');
        }

}
