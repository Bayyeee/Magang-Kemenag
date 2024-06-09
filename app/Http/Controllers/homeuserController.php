<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeuserController extends Controller
{
    public function index() {
        return view('users.homeUsers');
    }
}
