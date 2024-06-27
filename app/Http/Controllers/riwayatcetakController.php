<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class riwayatcetakController extends Controller
{
    public function riwayatCetak() {
        return view('users.cetak');
    }
}
