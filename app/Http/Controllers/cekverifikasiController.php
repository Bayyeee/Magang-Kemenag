<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cekverifikasiController extends Controller
{
    public function cekverifikasi() {
        return view('users.cekverifikasiUsers');
    }
}
