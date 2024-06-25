<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeadminController extends Controller
{
    public function homeAdmin(Request $request){
        return view("admin.homeAdmin");
    }

    public function cekBerkas() {
        return view("admin.cekBerkas");
    }

    
}
