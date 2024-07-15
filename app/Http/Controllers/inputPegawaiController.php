<?php

namespace App\Http\Controllers;

use App\Exports\pegawaiExport;
use App\Imports\pegawaiImport;
use App\Models\kelas;
use App\Models\kelasTahunAjar;
use App\Models\pegawai;
use App\Models\tahunAjar;
use App\Models\Usertpa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class inputPegawaiController extends Controller
{
    public function showHalaman()
    {
        $user = Auth::user();
        $tpa = $user->usertpa;

        if (!$tpa) {
            return redirect()->route('input-pegawai')->with('error', 'Anda tidak memiliki TPA terkait');
        }

        $pegawais = pegawai::with('kelasTahunAjar.kelas')
            ->where('id_tpa', $tpa->id)
            ->get();

        $kelas = kelas::all();

        $nama_kelas = [
            "Abu Bakar Ash-Shiddiq", "Umar bin Khattab", "Utsman bin Affan",
            "Ali bin Abi Talib", "Talhah bin Ubaidillah", "Zubair bin al-Awwam",
            "Abdur Rahman bin Auf", "Sa'ad bin Abi Waqqas", "Sa'id bin Zaid",
            "Abu Ubaidah bin al-Jarrah", "Bilal bin Rabah", "Khalid bin Walid",
            "Mu'adh bin Jabal", "Abdullah bin Mas'ud", "Ammar bin Yasir",
            "Salman al-Farisi", "Anas bin Malik", "Abu Hurairah", "Al-Khwarizmi",
            "Ibn Sina", "Ibn Al-Haytham", "Al-Farabi", "Al-Biruni", "Al-Razi",
            "Ibn Rushd", "Jabir ibn Hayyan", "Ibn Khaldun", "Al-Kindi",
            "Ibn Tufail", "Al-Masudi", "Al-Zahrawi", "Ibn Battuta", "Ibn Jubayr",
            "Ibn Bajjah", "Ibn Zuhr", "Ibn Nafis",
        ];
        return view('users.inputPegawai', compact('pegawais', 'kelas', 'nama_kelas'));
    }

    public function simpanPegawai(Request $request)


    {

        $request->validate([
            'nama_pegawai' => 'required|string|max:100',
            'jabatan' => 'required|string|max:100',
            'jenis_kelamin' => 'required|string',
            'nama_kelas' => 'required|string|max:100',
            'tahun_ajar' => 'required|string',
            'jabatan_lainnya' => 'nullable|string|max:100',
            'kelas_lainnya' => 'nullable|string|max:100',
        ]);

        $user = Auth::user();
        $tpa = $user->usertpa;

        if (!$tpa) {
            return redirect()->route('input-pegawai')->with('error', 'Anda tidak memiliki TPA terkait');
        }

        $jabatan = $request->jabatan === 'lainnya' ? $request->jabatan_lainnya : $request->jabatan;
        $nama_kelas = $request->nama_kelas === 'lainnya' ? $request->kelas_lainnya : $request->nama_kelas;

        $pegawai = pegawai::create([
            'id_tpa' => $tpa->id,
            'nama_pegawai' => $request->nama_pegawai,
            'jabatan' => $jabatan,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);

        $tahun_ajar = tahunAjar::firstOrCreate(['tahun_ajar' => $request->tahun_ajar]);

        $kelas = kelas::firstOrCreate(['nama_kelas' => $nama_kelas]);

        kelasTahunAjar::create([
            'id_kelas' => $kelas->id_kelas,
            'id_pegawai' => $pegawai->id_pegawai,
            'id_tahun_ajar' => $tahun_ajar->id_tahun_ajar,
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
        $pegawai = pegawai::with('kelasTahunAjar.kelas', 'kelasTahunAjar.tahunAjar')->findOrFail($id);
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
            'kelas_lainnya' => 'nullable|string|max:100',
        ]);

        $pegawai = pegawai::findOrFail($id);

        $user = Auth::user();
        $tpa = $user->usertpa;

        if (!$tpa) {
            return redirect()->route('input-pegawai')->with('error', 'Anda tidak memiliki TPA terkait');
        }

        $pegawai->update([
            'id_tpa' => $tpa->id,
            'nama_pegawai' => $request->nama_pegawai,
            'jabatan' => $request->jabatan === 'lainnya' ? $request->jabatan_lainnya : $request->jabatan,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);

        $nama_kelas = $request->nama_kelas === 'lainnya' ? $request->kelas_lainnya : $request->nama_kelas;

        $kelas = kelas::firstOrCreate(['nama_kelas' => $nama_kelas]);

        $tahun_ajar = tahunAjar::where('tahun_ajar', $request->tahun_ajar)->first();
        if (!$tahun_ajar) {
            return redirect()->route('input-pegawai')->with('error', 'Tahun ajar tidak ditemukan');
        }

        $kelas_tahun_ajar = kelasTahunAjar::where('id_pegawai', $id)
            ->where('id_tahun_ajar', $tahun_ajar->id_tahun_ajar)
            ->first();

        if ($kelas_tahun_ajar) {
            $kelas_tahun_ajar->update([
                'id_kelas' => $kelas->id_kelas,
            ]);
        } else {
            kelasTahunAjar::create([
                'id_kelas' => $kelas->id_kelas,
                'id_pegawai' => $pegawai->id_pegawai,
                'id_tahun_ajar' => $tahun_ajar->id_tahun_ajar,
            ]);
        }

        return redirect()->route('input-pegawai')->with('success', 'Data pegawai dan kelas berhasil diupdate');
    }

    public function hapusPegawai($id)
    {
        $pegawai = pegawai::findOrFail($id);

        $pegawai->kelasTahunAjar()->delete();

        foreach ($pegawai->kelasTahunAjar as $kelasTahunAjar) {
            $kelasTahunAjar->kelas()->delete();
        }

        $pegawai->delete();

        return redirect()->route('input-pegawai')->with('success', 'Data pegawai dan kelas terkait berhasil dihapus');
    }

    public function imporPegawai(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx',
        ]);

        Excel::import(new pegawaiImport, $request->file('file'));

        return redirect()->route('input-pegawai')->with('success', 'Data pegawai berhasil diimport');
    }

    public function pegawaiExport()
    {
        $user = Auth::user();
        $tpa = $user->usertpa;

        if (!$tpa) {
            return redirect()->route('input-pegawai')->with('error', 'Anda tidak memiliki TPA terkait');
        }

        return Excel::download(new pegawaiExport($tpa->id), 'pegawai.xlsx');
    }
}
