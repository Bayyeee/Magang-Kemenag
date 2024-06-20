<?php

namespace App\Http\Controllers;

use App\Models\berkasPendaftaran;
use App\Models\tipeBerkas;
use App\Models\pendaftaranTpa;
use App\Models\Usertpa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;


class pendaftaranController extends Controller
{
    public function pendaftaran()
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

        return view('users.pendaftaranUsers', compact('berkas'));
    }

    public function uploadBerkas(Request $request)
    {
        // dd($request->all());

        // Validasi request data
        $request->validate([
            'tipe_berkas' => 'required|string|max:100',
            'file' => 'required|mimes:pdf|max:2048'
        ]);

        //  path menyimpannya file
        $file = $request->file('file');
        $fileName = time() . rand(100, 900) . '_' . $file->getClientOriginalName();
        $filePath = 'berkas';

        if (!file_exists($filePath)) {
            mkdir($filePath, 0777, true);
        }

        $storePath = "/" . $filePath . '/' . $fileName;
        $file->move($filePath, $fileName);

        // ** user yang sedang login
        $user = Auth::user();
        $tpa = Usertpa::where('id_users', $user->id)->first();

        if (!$tpa) {
            Alert::error('error', 'TPA tidak ditemukan untuk pengguna yang sedang login.');
            return redirect()->back();
        }

        // Menyimpan data pendaftaran jika belum ada
        $pendaftaran = pendaftaranTpa::firstOrCreate(
            ['id_tpa' => $tpa->id],
            ['id_tpa' => $tpa->id]
        );

        // Menyimpan data tipe berkas baru
        $tipeBerkas = new tipeBerkas();
        $tipeBerkas->tipe_berkas = $request->tipe_berkas;
        $tipeBerkas->upload_berkas = $storePath;
        $tipeBerkas->waktu_upload = now();
        $tipeBerkas->save();

        // Menyimpan data ke berkas_pendaftaran
        $berkasPendaftaran = new berkasPendaftaran();
        $berkasPendaftaran->id_tipeberkas = $tipeBerkas->id_berkas;
        $berkasPendaftaran->id_pendaftaran = $pendaftaran->id_pendaftaran;
        $berkasPendaftaran->path = $storePath;
        $berkasPendaftaran->save();

        // Tampilkan alert sukses
        Alert::success('Berhasil', 'Berkas berhasil diunggah.');
        return redirect()->back();
    }
}
