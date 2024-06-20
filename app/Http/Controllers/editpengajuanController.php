<?php

namespace App\Http\Controllers;

use App\Models\berkasPendaftaran;
use App\Models\pendaftaranTpa;
use Illuminate\Support\Facades\Auth;
use App\Models\Usertpa;
use RealRashid\SweetAlert\Facades\Alert;

class editpengajuanController extends Controller
{
    public function editpengajuan()
    {
        $user = Auth::user();
        $tpa = Usertpa::where('id_users', $user->id)->first();

        if (!$tpa) {
            Alert::error('error', 'TPA tidak ditemukan untuk pengguna yang sedang login.');
            return redirect()->back();
        }

        $pendaftaran = pendaftaranTpa::where('id_tpa', $tpa->id)->first();

        $berkas = [];
        if ($pendaftaran) {
            $berkas = berkasPendaftaran::with('tipeBerkas')
                ->where('id_pendaftaran', $pendaftaran->id_pendaftaran)
                ->get();
        }

        return view('users.editpengajuanUsers', compact('berkas'));
    }
}
