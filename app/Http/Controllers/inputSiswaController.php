<?php

namespace App\Http\Controllers;

// app/Http/Controllers/inputSiswaController.php

use App\Models\siswa;
use App\Models\kelasTahunAjar;
use App\Models\kelas; // Pastikan import Kelas model jika belum diimport
use Illuminate\Http\Request;

class inputSiswaController extends Controller
{
    public function showSiswa()
    {
        $kelasTahunAjar = kelasTahunAjar::with(['kelas', 'pegawai'])->get();
        // $siswas = siswa::all();
        $siswas = siswa::with('kelasTahunAjar.kelas')->get();

        return view('users.inputSiswa', compact('kelasTahunAjar', 'siswas'));
    }

    public function simpanSiswa(Request $request)
    {
        $request->validate([
            'nama_siswa' => 'required|string|max:100',
            'nomor_identitas' => 'required|string|max:8|unique:siswa,nomor_identitas',
            'jenis_kelamin' => 'required|string',
            'id_kelas_tahun_ajar' => 'required|exists:kelas_tahun_ajar,id_kelas_tahun_ajar',
        ]);

        siswa::create([
            'nama_siswa' => $request->nama_siswa,
            'nomor_identitas' => $request->nomor_identitas,
            'jenis_kelamin' => $request->jenis_kelamin,
            'id_kelas_tahun_ajar' => $request->id_kelas_tahun_ajar,
        ]);

        return redirect()->route('show-Siswa')->with('success', 'Data siswa berhasil disimpan.');
    }
}
