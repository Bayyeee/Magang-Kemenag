<?php

namespace App\Http\Controllers;

use App\Models\Usertpa;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class profileController extends Controller
{
    public function profile()
    {
        $user = auth()->user();
        $userProfile = Usertpa::where('id_users', $user->id)->first();
        return view('profile.userProfile', compact('user', 'userProfile'));
    }

    public function editprofile()
    {
        $user = auth()->user();
        $userProfile = Usertpa::where('id_users', $user->id)->first();
        return view('profile.editProfile', compact('user', 'userProfile'));
    }

    public function store(Request $request)
    {
        // Validasi request data
        $request->validate([
            'name' => 'required|string|max:30',
            'alamat' => 'required|string|max:100',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:3048',
            'nama' => 'required|string|max:30',
            'nip' => 'nullable|string|max:18',
            'jenis_kelamin' => 'required|string|max:10',
        ]);

        // ** path gambar
        $filePath = public_path('images');

        // ** cek profil pengguna yang sedang login
        $userProfile = Usertpa::where('id_users', auth()->id())->first();
        $users = User::find(auth()->id());

        // ** buat objek Usertpa baru
        if (!$userProfile) {
            $userProfile = new Usertpa();
            $userProfile->id_users = auth()->id();
        }

        // ** Update usertpa
        $userProfile->nama_tpa = $request->name;
        $userProfile->alamat = $request->alamat;

        // ** update users
        $users->nama = $request->nama;
        $users->nip = $request->nip;
        $users->jenis_kelamin = $request->jenis_kelamin;

        // ** upload logo
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $file_name = time() . rand(100, 900) . "." . $file->getClientOriginalName();
            $file->move($filePath, $file_name);
            $userProfile->logo = $file_name;
        }

        // ** save
        $userProfile->save();
        $users->save();

        // Tampilkan alert sukses
        Alert::success('Berhasil', 'Profil berhasil diperbarui');
        return redirect()->route('Profile');
    }
}
