<?php

namespace App\Http\Controllers;

use App\Models\berita;
use Illuminate\Http\Request;

class homeuserController extends Controller
{
    public function index() {
        // return view('users.homeUsers');
        $berita = berita::with('fotoBerita')->get();
        return view('users.homeUsers', compact('berita'));
    }
}
