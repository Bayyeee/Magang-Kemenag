<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\Usertpa;
use Illuminate\Http\Request;

class homeuserController extends Controller
{
    public function index() {
        // return view('users.homeUsers');
        $berita = berita::with('fotoBerita')->get();

        // $userTPA = Usertpa::with('id')->get();

        return view('users.homeUsers', compact('berita'));
    }
}
