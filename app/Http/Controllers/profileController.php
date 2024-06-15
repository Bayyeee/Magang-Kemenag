<?php

namespace App\Http\Controllers;

use App\Models\Usertpa;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class profileController extends Controller
{
    // public function profile(Request $request){
    //     return view("profile.userProfile");
    // }

    public function profile()
    {
        $users = auth()->user();
        // $dataGambar = Usertpa::latest()->get();
        return view('profile.userProfile');
    }

    public function store(Request $request)
    {
        // dd($request->all());

        // ** validasi request data mwehehe
        $request->validate([
            'name' => 'required|string|max:30',
            'alamat' => 'required|string|max:100',
            'logo' => 'required|image|mimes:jpeg,png,jpg,svg|max:3048',
        ]);

        // ** pindah data ke public bro
        $filePath = public_path('images');
        $insert = new Usertpa();
        $insert->nama_tpa = $request->name;
        $insert->alamat = $request->alamat;
        $insert->id_users = auth()->id();

        // ** get data upload foto bro
        if ($request->hasfile('logo')) {
            $file = $request->file('logo');
            $file_name = time() . rand(100, 900) . "." . $file->getClientOriginalName();
            // $file_name = $file->getClientOriginalName();

            $file->move($filePath, $file_name);
            $insert->logo = $file_name;
        }

        $insert->save();
        Alert::success('Berhasil', 'Success Edit Profile');
        return redirect()->route('Profile');
    }
}
