<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    // ** Menampilkan halaman Home
    public function index(Request $request){
        return view("Home");
    }
}
