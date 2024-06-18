<?php

namespace App\Http\Controllers;

use App\Models\tipeBerkas;
use App\Models\pendaftaranTpa;
use App\Models\Tpa;
use App\Models\Usertpa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class pendaftaranController extends Controller
{
    public function pendaftaran()
    {
        return view('users.pendaftaranUsers');
    }

    public function uploadBerkas(Request $request)
    {
        // Validasi request data
        $request->validate([
            'nama_berkas' => 'required|string|max:100',
            'tipe_berkas' => 'required|string|max:100',
            'file' => 'required|mimes:pdf|max:2048'
        ]);

        // Mengambil file dan menyimpannya
        $file = $request->file('file');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs('berkas');

        if (!file_exists($filePath)) {
            mkdir($filePath, 0777, true);
        }

        $file->move($filePath, $fileName);
        $storePath = 'berkas/' . $fileName;

        // Mengambil user yang sedang login
        $user = Auth::user();
        $tpa = Usertpa::where('id_users', $user->id)->first();

        if (!$tpa) {
            Alert::error('error', 'TPA tidak ditemukan untuk pengguna yang sedang login.');
            return redirect()->back();
        }

        // Menyimpan data pendaftaran
        $pendaftaran = new pendaftaranTpa();
        $pendaftaran->id_tpa = $tpa->id;
        $pendaftaran->save();

        // Menyimpan data tipe berkas
        $tipeBerkas = new tipeBerkas();
        $tipeBerkas->nama_berkas = $request->nama_berkas;
        $tipeBerkas->tipe_berkas = $request->tipe_berkas;
        $tipeBerkas->upload_berkas = $storePath;
        $tipeBerkas->status_verifikasi = 'proses';
        $tipeBerkas->id_pendaftaran = $pendaftaran->id_pendaftaran;
        $tipeBerkas->save();

        // Tampilkan alert sukses
        Alert::success('Berhasil', 'Berkas berhasil diunggah.');
        return redirect()->back();
    }
}
