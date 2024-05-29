<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;


class landingController extends Controller
{
    //
    // public function index(){
    //     return view("landingPage");
    // }

    // ** CHECK AUTH AGAR TIDAK BISA MENGAKSES LANDINGPAGE JIKA USER SUDAH DIDALAM /HOME
    public function checkLanding() {
        if (Auth::check()) {
            Alert::error('error', 'Halaman tidak ditemukan!!!');
            return redirect('/home');
        }
        return view('landingPage');
    }
}
