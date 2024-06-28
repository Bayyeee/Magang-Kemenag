<?php

namespace App\Http\Controllers;

use App\Models\berkasPendaftaran;
use App\Models\pendaftaranTpa;
use App\Models\riwayatCetak;
use App\Models\Usertpa;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class riwayatcetakController extends Controller
{
    public function riwayatCetak()
    {
        $pendaftaran = pendaftaranTpa::all();

        // dd($pendaftaran);

        return view('users.cetak', compact('pendaftaran'));
    }

    public function cetakSurat($id_pendaftaran, $action)
    {
        // Ambil pendaftaran TPA yang sesuai dengan pengguna yang sedang login
        $user = Auth::user();
        $tpa = Usertpa::where('id_users', $user->id)->first();

        $pendaftaran = pendaftaranTpa::with('usersTpa', 'berkasPendaftaran.tipeBerkas')
            ->where('id_pendaftaran', $id_pendaftaran)
            ->where('id_tpa', $tpa->id)
            ->firstOrFail();

        // Verifikasi bahwa semua berkas sudah diverifikasi
        $berkasDiverifikasi = $pendaftaran->berkasPendaftaran->every(function ($berkas) {
            return $berkas->status_verifikasi == 'diverifikasi';
        });

        if (!$berkasDiverifikasi) {
            Alert::error('Gagal', 'Semua berkas harus diverifikasi sebelum mencetak surat.');
            return redirect()->back();
        }

        // Generate PDF
        $pdf = Pdf::loadView('users.suratKeterangan', compact('pendaftaran'));

        // Simpan riwayat cetak
        riwayatCetak::create([
            'id_pendaftaran' => $pendaftaran->id_pendaftaran,
            'document_type' => 'Surat Keterangan Diterima',
            'printed_at' => now(),
            'print_by' => $tpa->nama_tpa,
        ]);

        if ($action == 'download') {
            return $pdf->download('surat_keterangan.pdf');
        } else {
            return $pdf->stream('surat_keterangan.pdf');
        }
    }
}
