<?php

namespace App\Http\Controllers;

use App\Models\berkasPendaftaran;
use App\Models\pendaftaranTpa;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class homeadminController extends Controller
{
    public function homeAdmin(Request $request)
    {
        $pendaftarans = pendaftaranTpa::all();

        return view("admin.homeAdmin", compact('pendaftarans'));
    }

    public function cekBerkas()
    {
        $pendaftarans = pendaftaranTpa::all();

        return view("admin.cekBerkas", compact('pendaftarans'));
    }

    public function showBerkas($id_pendaftaran)
    {
        $pendaftarans = pendaftaranTpa::all();

        $pendaftaran = pendaftaranTpa::findOrFail($id_pendaftaran);

        $berkasPendaftaran = berkasPendaftaran::where('id_pendaftaran', $pendaftaran->id_pendaftaran)->get();

        // dd($berkasPendaftaran);

        return view('admin.cekBerkas', [
            'pendaftarans' => $pendaftarans,
            'pendaftaran' => $pendaftaran,
            'berkasPendaftaran' => $berkasPendaftaran
        ]);
    }


    public function verifikasi($id_berkaspendaftaran)
    {
        $berkasPendaftaran = berkasPendaftaran::findOrFail($id_berkaspendaftaran);
        $berkasPendaftaran->status_verifikasi = 'diverifikasi';
        $berkasPendaftaran->save();

        $user = auth()->user();

        $tipeBerkas = $berkasPendaftaran->tipeBerkas;
        $tipeBerkas->verifikator = $user->role;
        $tipeBerkas->pesan = null;
        $tipeBerkas->save();

        Alert::success('Berhasil', 'Status verifikasi telah diupdate.');
        return redirect()->back();
    }

    public function tolak(Request $request, $id_berkaspendaftaran, $id_pendaftaran)
    {
        $berkasPendaftaran = berkasPendaftaran::findOrFail($id_berkaspendaftaran);
        $berkasPendaftaran->status_verifikasi = 'ditolak';
        $berkasPendaftaran->save();

        $user = auth()->user();

        $tipeBerkas = $berkasPendaftaran->tipeBerkas;
        $tipeBerkas->verifikator = $user->role;

        $tipeBerkas->pesan = $request->input('alasan_penolakan') === 'Lainnya'
            ? $request->input('pesan')
            : $request->input('alasan_penolakan');
        $tipeBerkas->save();

        Alert::success('Berhasil', 'Status verifikasi telah ditolak dan pesan telah dikirim.');
        return redirect()->back();
    }


    public function editBerkas(Request $request, $id_berkaspendaftaran)
    {
        $berkasPendaftaran = berkasPendaftaran::findOrFail($id_berkaspendaftaran);
        $berkasPendaftaran->status_verifikasi = $request->input('status_verifikasi');
        $berkasPendaftaran->save();

        $user = auth()->user();

        $tipeBerkas = $berkasPendaftaran->tipeBerkas;
        $tipeBerkas->verifikator = $user->role;

        $tipeBerkas->pesan = null; // bisa pakai ini jua $tipeBerkas->pesan = '';

        $tipeBerkas->save();

        Alert::success('Berhasil', 'Status verifikasi telah diupdate.');
        return redirect()->back();
    }
}
