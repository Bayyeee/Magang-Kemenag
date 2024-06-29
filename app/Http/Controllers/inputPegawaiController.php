<?php

// inputPegawaiController.php
namespace App\Http\Controllers;

use App\Models\kelas;
use App\Models\kelasTahunAjar;
use App\Models\pegawai;
use App\Models\Usertpa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class inputPegawaiController extends Controller
{
    public function showHalaman()
    {
        $pegawais = pegawai::with('kelasTahunAjar.kelas')->get();
        return view('users.inputPegawai', compact('pegawais'));
    }

    public function simpanPegawai(Request $request)
    {
        $request->validate([
            'nama_pegawai' => 'required|string|max:100',
            'jabatan' => 'required|string|max:100',
            'jenis_kelamin' => 'required|string',
            'nama_kelas' => 'required|string|max:100',
            'tahun_ajar' => 'required|string',
        ]);

        $user = Auth::user();
        $tpa = $user->usertpa;

        if (!$tpa) {
            return redirect()->route('input-pegawai')->with('error', 'Anda tidak memiliki TPA terkait');
        }

        // Simpan pegawai
        $pegawai = pegawai::create([
            'id_tpa' => $tpa->id,
            'nama_pegawai' => $request->nama_pegawai,
            'jabatan' => $request->jabatan,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);

        // Simpan kelas
        $kelas = kelas::firstOrCreate(['nama_kelas' => $request->nama_kelas]);

        // Simpan ke tabel pivot
        kelasTahunAjar::create([
            'id_kelas' => $kelas->id_kelas,
            'id_pegawai' => $pegawai->id_pegawai,
            'tahun_ajar' => $request->tahun_ajar,
        ]);

        return redirect()->route('input-pegawai')->with('success', 'Data pegawai dan kelas berhasil disimpan');
    }


    public function getPegawai($id)
    {
        $pegawai = pegawai::with('kelasTahunAjar.kelas')->findOrFail($id);
        return response()->json($pegawai);
    }


    public function editPegawai($id)
    {
        $pegawai = pegawai::with('kelasTahunAjar.kelas')->findOrFail($id);
        $kelas = kelas::all();

        return view('users.inputPegawai', compact('pegawai', 'kelas'));
    }

    public function updatePegawai(Request $request, $id)
    {
        $request->validate([
            'nama_pegawai' => 'required|string|max:100',
            'jabatan' => 'required|string|max:100',
            'jenis_kelamin' => 'required|string',
            'nama_kelas' => 'required|string|max:100',
            'tahun_ajar' => 'required|string',
            'jabatan_lainnya' => 'nullable|string|max:100',
        ]);

        $pegawai = pegawai::findOrFail($id);

        // Dapatkan TPA dari pengguna yang sedang login
        $user = Auth::user();
        $tpa = $user->usertpa;

        if (!$tpa) {
            return redirect()->route('input-pegawai')->with('error', 'Anda tidak memiliki TPA terkait');
        }

        // Update pegawai
        $pegawai->update([
            'id_tpa' => $tpa->id,
            'nama_pegawai' => $request->nama_pegawai,
            'jabatan' => $request->jabatan === 'lainnya' ? $request->jabatan_lainnya : $request->jabatan,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);

        // Update atau buat kelas baru
        $kelas = kelas::firstOrCreate(['nama_kelas' => $request->nama_kelas]);

        // Update tabel pivot
        $pegawai->kelasTahunAjar()->updateOrCreate(
            ['id_pegawai' => $pegawai->id_pegawai],
            ['id_kelas' => $kelas->id_kelas, 'tahun_ajar' => $request->tahun_ajar]
        );

        return redirect()->route('input-pegawai')->with('success', 'Data pegawai dan kelas berhasil diubah');
    }

    public function hapusPegawai($id)
    {
        $pegawai = pegawai::findOrFail($id);
        $pegawai->delete();

        return redirect()->route('input-pegawai')->with('success', 'Data pegawai berhasil dihapus');
    }
}
