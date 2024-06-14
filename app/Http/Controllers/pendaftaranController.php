<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pendaftaranController extends Controller
{
    public function pendaftaran(){
        return view('users.pendaftaranUsers');
    }
    
}
