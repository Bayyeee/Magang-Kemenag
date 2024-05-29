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
    public function simpanregistrasi(Request $request){
        // ** Check Masuk Data
        // dd($request->all());
    
        // ** Menyimpan Data User Registrasi
        $existingUser = User::where('email', $request->email)->first();
    
        if ($existingUser) {
            // Jika email sudah terdaftar, beri tahu pengguna
            Alert::error('Gagal','Email sudah terdaftar!!!');
            return redirect()->back();
        }
    
        // Jika email belum terdaftar, simpan data pengguna baru
        User::create([
            'email' => $request->email,
            'level' => 'users',
            'password' => Hash::make($request->password),
        ]);
    
        Alert::success('Berhasil', 'Berhasil membuat akun!!!');
        return redirect('login');
    }
    

    // ** CHECK AUTH USER JIKA SUDAH BERADA DIHALAMAN /HOME TIDAK BISA KEMBALI KE HALAMAN REGISTRASI SERTA MENAMPILKAN HALAMAN REGISTRASI
    public function checkRegister() {
        if (Auth::check()) {
            Alert::error('Error','Halaman tidak ditemukan!!!');
            return redirect('/home');
        }
        return view('login.registrasi');
    }
}
