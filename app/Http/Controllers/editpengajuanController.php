<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\tipeBerkas;
use App\Models\Usertpa;

class editpengajuanController extends Controller
{
    public function editpengajuan() {
        $user = Auth::user();
        $tpa = Usertpa::where('id_users', $user->id)->first();

        if (!$tpa) {
            return redirect()->back()->with('error', 'TPA tidak ditemukan untuk pengguna yang sedang login.');
        }

        $berkas = tipeBerkas::whereHas('pendaftaranTpa', function ($query) use ($tpa) {
            $query->where('id_tpa', $tpa->id);
        })->get();

        return view('users.editpengajuanUsers', compact('berkas'));
    }
}
