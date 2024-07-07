<?php

namespace App\Http\Controllers;

use App\Models\kelas;
use App\Models\pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class cetakPegawaiController extends Controller
{
    public function cetakPegawaiTabel()
    {

        $user = Auth::user();
        $tpa = $user->usertpa;

        if (!$tpa) {
            return redirect()->route('input-pegawai')->with('error', 'Anda tidak memiliki TPA terkait');
        }

        $pegawai = pegawai::with('kelasTahunAjar.kelas')
            ->where('id_tpa', $tpa->id)
            ->get();

        // $kelas = kelas::all();

        return view('users.cetakTablePegawai', compact('pegawai'));
    }
}
