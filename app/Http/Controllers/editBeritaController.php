<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\fotoBerita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class editBeritaController extends Controller
{
    public function showBerita()
    {
        $berita = berita::with('fotoBerita')->get();
        return view('admin.editBerita', compact('berita'));
    }

    public function tambahBerita(Request $request)
    {
        $request->validate([
            'judul_berita' => 'required|max:30',
            'isi_berita' => 'required',
            'foto' => 'required|image|mimes:jpeg,jpg,png,svg|max:2048',
        ]);

        $foto = $request->file('foto');
        $fotoName = time() . '_' . $foto->getClientOriginalName();
        $fotoPath = 'berita/';

        $foto->move(public_path($fotoPath), $fotoName);

        $newFoto = fotoBerita::create([
            'nama_foto' => $foto->getClientOriginalName(),
            'upload_foto' => $fotoPath . $fotoName,
            'path' => $fotoPath . $fotoName,
        ]);

        $berita = berita::create([
            'id_users' => Auth::user()->id,
            'id_foto' => $newFoto->id_foto,
            'judul_berita' => $request->judul_berita,
            'isi_berita' => $request->isi_berita,
        ]);

        if ($berita && $newFoto) {
            return redirect()->back()->with('success', 'Berita berhasil ditambahkan!');
        } else {
            return redirect()->back()->with('error', 'Gagal menambahkan berita.');
        }
    }

    public function editBerita($id)
    {
        $berita = berita::with('fotoBerita')->findOrFail($id);
        return response()->json($berita);
    }

    public function updateBerita(Request $request, $id)
    {

        $request->validate([
            'judul_berita' => 'required|max:30',
            'isi_berita' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,jpg,png,svg|max:2048',
        ]);

        $berita = berita::findOrFail($id);
        $foto = $berita->fotoBerita;

        if ($request->hasFile('foto')) {
            // Hapus foto lama
            File::delete(public_path($foto->path));

            // Upload foto baru
            $newFoto = $request->file('foto');
            $fotoName = time() . '_' . $newFoto->getClientOriginalName();
            $fotoPath = 'berita/';
            $newFoto->move(public_path($fotoPath), $fotoName);

            // Update foto dalam database
            $foto->update([
                'nama_foto' => $newFoto->getClientOriginalName(),
                'upload_foto' => $fotoPath . $fotoName,
                'path' => $fotoPath . $fotoName,
            ]);
        }

        $berita->update([
            'id_users' => Auth::user()->id,
            'judul_berita' => $request->judul_berita,
            'isi_berita' => $request->isi_berita,
        ]);

        return redirect()->back()->with('success', 'Berita berhasil diperbarui!');
    }

    public function hapusBerita($id)
    {
        $berita = berita::findOrFail($id);
        $foto = $berita->fotoBerita;

        // Hapus foto dari direktori
        if (File::exists(public_path($foto->path))) {
            File::delete(public_path($foto->path));
        }

        // Hapus data berita dan foto dari database
        $foto->delete();
        $berita->delete();

        return redirect()->back()->with('success', 'Berita berhasil dihapus!');
    }
}
