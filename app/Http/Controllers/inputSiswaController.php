<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use App\Models\kelasTahunAjar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class inputSiswaController extends Controller
{
    public function showSiswa()
    {
        $kelas_tahun_ajar = kelasTahunAjar::with(['kelas', 'pegawai'])->get();

        $siswas = siswa::with('kelasTahunAjar.kelas')->get();

        return view('users.inputSiswa', compact('kelas_tahun_ajar', 'siswas'));
    }

    public function simpanSiswa(Request $request)
    {

        $request->validate([
            'nama_siswa' => 'required|string|max:255',
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

        return redirect()->route('show-Siswa')->with('success', 'Data siswa berhasil disimpan');
    }

    public function editSiswa(Request $request, $id_siswa){

        $siswas = siswa::findOrFail($id_siswa);

        $request->validate([
            'nama_siswa' => 'required|string|max:255',
            'nomor_identitas' => 'required|string|max:8|unique:siswa,nomor_identitas',
            'jenis_kelamin' => 'required|string',
            'id_kelas_tahun_ajar' => 'required|exists:kelas_tahun_ajar,id_kelas_tahun_ajar',
        ]);

        // $siswa::where('id_siswa', $siswa)

        // siswa::where('id_siswa', $siswas->id_siswa)->delete();

        // siswa::create([
        //     'nama_siswa' => $request->nama_siswa,
        //     'nomor_identitas' => $request->nomor_identitas,
        //     'jenis_kelamin' => $request->jenis_kelamin,
        //     'id_kelas_tahun_ajar' => $request->id_kelas_tahun_ajar
        // ]);

        $siswas->nama_siswa = $request->input('nama_siswa');
        $siswas->nomor_identitas = $request->input('nomor_identitas');
        $siswas->jenis_kelamin = $request->input('jenis_kelamin');
        $siswas->id_kelas_tahun_ajar = $request->input('id_kelas_tahun_ajar');

        $siswas->save();

        return redirect()->route('show-Siswa');
    }

    public function deleteSiswa($id) {
        $siswa = siswa::findOrFail($id);

        $siswa->delete();

        return redirect()->route('show-Siswa');
    }
}
