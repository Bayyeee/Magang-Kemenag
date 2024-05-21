<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Auth;


class landingController extends Controller
{
    //
    // public function index(){
    //     return view("landingPage");
    // }

    // ** CHECK AUTH AGAR TIDAK BISA MENGAKSES LANDINGPAGE JIKA USER SUDAH DIDALAM /HOME
    public function checkLanding() {
        if (Auth::check()) {
            return redirect('/home')->with('error', 'Error!!!');
        }
        return view('landingPage')->with('error', 'Error!!!');
    }
}
