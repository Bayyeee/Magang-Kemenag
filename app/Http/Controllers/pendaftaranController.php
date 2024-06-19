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
        $user = Auth::user();
        $tpa = Usertpa::where('id_users', $user->id)->first();

        if (!$tpa) {
            Alert::error('error', 'TPA tidak ditemukan untuk pengguna yang sedang login.');
            return redirect()->back();
        }

        $pendaftaran = pendaftaranTpa::where('id_tpa', $tpa->id)->first();

        $berkas = [];
        if ($pendaftaran) {
            // Sertakan waktu_upload dengan data tipeBerkas
            $berkas = tipeBerkas::where('id_pendaftaran', $pendaftaran->id_pendaftaran)
                ->select('id_berkas', 'nama_berkas', 'tipe_berkas', 'upload_berkas', 'status_verifikasi', 'waktu_upload')
                ->get();
        }

        return view('users.pendaftaranUsers', compact('berkas'));
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
        $fileName = time() . rand(100, 900) . '_' . $file->getClientOriginalName();
        $filePath = 'berkas';
        // dd($fileName);

        if (!file_exists($filePath)) {
            mkdir($filePath, 0777, true);
        }

        $storePath = "/" . $filePath . '/' . $fileName;
        // $fullPath = "./public" . $storePath;
        $file->move($filePath, $fileName);

        // Mengambil user yang sedang login
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

        // Check if the same tipe_berkas already exists
        $existingTipeBerkas = tipeBerkas::where('id_pendaftaran', $pendaftaran->id_pendaftaran)
            ->where('tipe_berkas', $request->tipe_berkas)
            ->first();

        if ($existingTipeBerkas) {
            // Update existing record
            $existingTipeBerkas->nama_berkas = $request->nama_berkas;
            $existingTipeBerkas->upload_berkas = $storePath;
            $existingTipeBerkas->status_verifikasi = 'proses';
            $existingTipeBerkas->save();
        } else {
            // Menyimpan data tipe berkas baru
            $tipeBerkas = new tipeBerkas();
            $tipeBerkas->nama_berkas = $request->nama_berkas;
            $tipeBerkas->tipe_berkas = $request->tipe_berkas;
            $tipeBerkas->upload_berkas = $storePath;
            $tipeBerkas->status_verifikasi = 'proses';
            $tipeBerkas->id_pendaftaran = $pendaftaran->id_pendaftaran;
            $tipeBerkas->save();
        }

        // Tampilkan alert sukses
        Alert::success('Berhasil', 'Berkas berhasil diunggah.');
        return redirect()->back();
    }
}
