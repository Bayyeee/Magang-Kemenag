<?php

namespace App\Http\Controllers;

use App\Models\berkasPendaftaran;
use App\Models\pendaftaranTpa;
use App\Models\tipeBerkas;
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
            Alert::error('error', 'Silahkan perbarui halaman profile dulu untuk melakukan pendaftaran tindak lanjut!!');
            return redirect()->back();
        }

        $pendaftaran = pendaftaranTpa::where('id_tpa', $tpa->id)->first();

        $berkas = [];
        $verifikasiBerkas = false;


        if ($pendaftaran) {
            $berkas = berkasPendaftaran::with('tipeBerkas')
                ->where('id_pendaftaran', $pendaftaran->id_pendaftaran)
                ->get();
        }

        // dd($berkas);

        $verifikasiBerkas = $berkas->every(function($berkasItem){
            return $berkasItem->status_verifikasi == 'diverifikasi';
        });

        return view('users.pendaftaranUsers', compact('berkas', 'verifikasiBerkas'));
    }

    public function uploadBerkas(Request $request)
    {
        // ** Validasi request data
        $request->validate([
            'tipe_berkas' => 'required|string|max:100',
            'file' => 'required|mimes:pdf|max:2048'
        ]);

        // ** Mengambil file dan menyimpannya
        $file = $request->file('file');
        $fileName = time() . rand(100, 900) . '_' . $file->getClientOriginalName();
        $filePath = 'berkas';

        if (!file_exists($filePath)) {
            mkdir($filePath, 0777, true);
        }

        $storePath = "/" . $filePath . '/' . $fileName;
        $file->move($filePath, $fileName);

        // ** Mengambil user yang sedang login
        $user = Auth::user();
        $tpa = Usertpa::where('id_users', $user->id)->first();

        if (!$tpa) {
            Alert::error('error', 'TPA tidak ditemukan untuk pengguna yang sedang login.');
            return redirect()->back();
        }

        // ** Menyimpan id pendaftaran jika belum ada
        $pendaftaran = pendaftaranTpa::firstOrCreate(
            ['id_tpa' => $tpa->id],
            ['id_tpa' => $tpa->id]
        );

        // ** cek tipe_berkas
        $existingBerkasPendaftaran = berkasPendaftaran::where('id_pendaftaran', $pendaftaran->id_pendaftaran)
            ->whereHas('tipeBerkas', function ($query) use ($request) {
                $query->where('tipe_berkas', $request->tipe_berkas);
            })->first();

        if ($existingBerkasPendaftaran) {
            // ** Update tipe_berkas
            $existingTipeBerkas = $existingBerkasPendaftaran->tipeBerkas;
            $existingTipeBerkas->upload_berkas = $storePath;
            $existingTipeBerkas->waktu_upload = now();
            $existingTipeBerkas->save();

            // ** Update path dan status verifikasi berkas_pendaftaran
            $existingBerkasPendaftaran->path = $storePath;
            $existingBerkasPendaftaran->status_verifikasi = 'proses';
            $existingBerkasPendaftaran->save();
        } else {
            // ** Menyimpan data baru tipe_berkas
            $tipeBerkas = new tipeBerkas();
            $tipeBerkas->tipe_berkas = $request->tipe_berkas;
            $tipeBerkas->upload_berkas = $storePath;
            $tipeBerkas->waktu_upload = now();
            $tipeBerkas->save();

            // ** Menyimpan data berkas_pendaftaran
            $berkasPendaftaran = new berkasPendaftaran();
            $berkasPendaftaran->id_tipeberkas = $tipeBerkas->id_berkas;
            $berkasPendaftaran->id_pendaftaran = $pendaftaran->id_pendaftaran;
            $berkasPendaftaran->path = $storePath;
            $berkasPendaftaran->status_verifikasi = 'proses';
            $berkasPendaftaran->save();
        }

        Alert::success('Berhasil', 'Berkas berhasil diunggah.');
        return redirect()->back();
    }
}
