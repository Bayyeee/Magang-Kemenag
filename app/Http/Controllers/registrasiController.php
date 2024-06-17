<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class registrasiController extends Controller
{
    // ** Menampilkan Halaman Registrasi
    // public function halamanRegistrasi(Request $request){
    //     return view("login.registrasi");
    // }

    // * CREATE USER ATAU SIMPAN DATA REGISTRASI
    public function simpanregistrasi(Request $request)
    {
        // ** Check Masuk Data
        // dd($request->all());

        // $request->validate([
        //     'email' => 'required|email|unique:users,email,',
        //     'password' => 'required|min:8|confirmed',
        // ]);

        // ** Menyimpan Data User Registrasi
        $existingUser = User::where('email', $request->email)->first();

        if ($existingUser) {
            // Jika email sudah terdaftar, beri tahu pengguna
            // Alert::error('Gagal','Email terdaftar');
            toast('Warning Toast', 'Email sudah terdaftar!!!');
            return redirect('/registrasi');
        }

        // if ($request->filled('nip')) {
        //     $existingNipUser = User::where('nip', $request->nip)->first();
        //     if ($existingNipUser) {
        //         Alert::error('Gagal','NIP terdaftar');
        //         // toast('Warning Toast', 'Email sudah terdaftar!!!');
        //         return redirect('/registrasi');
        //     }
        // }

        // Jika email belum terdaftar, simpan data pengguna baru
        User::create([
            'email' => $request->email,
            'role' => 'pengaju',
            'password' => Hash::make($request->password),
        ]);

        // Alert::success('Berhasil', 'Berhasil membuat akun!!!');
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
