<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class registrasiController extends Controller
{
    // * CREATE USER ATAU SIMPAN DATA REGISTRASI
    public function simpanregistrasi(Request $request)
    {
        // ** Check Masuk Data
        // dd($request->all());

        // ** Menyimpan Data User Registrasi
        $existingUser = User::where('email', $request->email)->first();

        if ($existingUser) {
            toast('Warning Toast', 'Email sudah terdaftar!!!');
            return redirect('/registrasi');
        }

        // ** Jika email belum terdaftar, simpan data pengguna baru
        $user = User::create([
            'email' => $request->email,
            'role' => 'pengaju',
            'password' => Hash::make($request->password),
        ]);

        // $user->sendEmailVerificationNotification();

        toast('Berhasil membuat akun', 'success');
        return redirect('login');
    }


    // ** CHECK AUTH USER JIKA SUDAH BERADA DIHALAMAN /HOME TIDAK BISA KEMBALI KE HALAMAN REGISTRASI SERTA MENAMPILKAN HALAMAN REGISTRASI
    public function checkRegister()
    {
        if (Auth::check()) {
            Alert::error('Error', 'Halaman tidak ditemukan!!!');
            return redirect('/home');
        }
        return view('auth.registrasi');
    }
}
