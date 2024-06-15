<?php

namespace App\Http\Controllers;

use App\Models\Usertpa;
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
        ]);

        // ** path gambar
        $filePath = public_path('images');

        // ** cek profil pengguna yang sedang login
        $userProfile = Usertpa::where('id_users', auth()->id())->first();

        // ** buat objek Usertpa baru
        if (!$userProfile) {
            $userProfile = new Usertpa();
            $userProfile->id_users = auth()->id();
        }

        // ** Update
        $userProfile->nama_tpa = $request->name;
        $userProfile->alamat = $request->alamat;

        // ** upload logo
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $file_name = time() . rand(100, 900) . "." . $file->getClientOriginalName();
            $file->move($filePath, $file_name);
            $userProfile->logo = $file_name;
        }

        // ** save
        $userProfile->save();

        // Tampilkan alert sukses
        Alert::success('Berhasil', 'Profil berhasil diperbarui');
        return redirect()->route('Profile');
    }
}
