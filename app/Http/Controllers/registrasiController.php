<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
// use Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class registrasiController extends Controller
{
    // ** Menampilkan Halaman Registrasi
    // public function halamanRegistrasi(Request $request){
    //     return view("login.registrasi");
    // }

    // * CREATE USER ATAU SIMPAN DATA REGISTRASI
    public function simpanregistrasi(Request $request){
        // ** Check Masuk Data
        // dd($request->all());

        // ** Menyimpan Data User Registrasi
        User::create([
            'email' => $request->email,
            'level' => 'users',
            'password' => Hash::make($request->password),
        ]);
        return redirect('login')->with('success', 'Success Membuat Akun!!!');
    }

    // ** CHECK AUTH USER JIKA SUDAH BERADA DIHALAMAN /HOME TIDAK BISA KEMBALI KE HALAMAN REGISTRASI SERTA MENAMPILKAN HALAMAN REGISTRASI
    public function checkRegister() {
        if (Auth::check()) {
            return redirect('/home')->with('error', 'Error!!!');
        }
        return view('login.registrasi')->with('error', 'Error!!!');
    }
}
