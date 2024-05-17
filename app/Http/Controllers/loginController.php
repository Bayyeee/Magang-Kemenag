<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

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
        return redirect("/");
    }

    // ** UNTUK LOGOUT
    public function logout(Request $request){
        Auth::logout();
        return redirect("/");
    }

    // ** CHECK USER AGAR TIDAK BISA KEMBALI LAGI KE HALAMAN /LOGIN JIKA TELAH BERADA DI HALAMAN /HOME SERTA INI UNTUK MENAMPILKAN HALAMAN LOGIN
    public function login() {
        if (Auth::check()) {
        return redirect('/home')->with('error', 'Not Found!');
        }
        return view('login.login')->with('error', 'Not Found!');
        }

}
