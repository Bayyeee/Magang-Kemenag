<?php

namespace App\Http\Controllers;

use App\Mail\VerificationMail;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class registrasiController extends Controller
{
    public function simpanregistrasi(Request $request)
    {
        $request->session()->put('email', $request->email);
        $request->session()->put('password', $request->password);

        $verification_code = rand(100000, 999999);
        $request->session()->put('verification_code', $verification_code);

        // Kirim kode verifikasi melalui email
        $this->sendVerificationEmail($request->email, $verification_code);

        return redirect('showverifikasi');
    }

    protected function sendVerificationEmail($email, $verification_code)
    {
        $subject = "Kode Verifikasi Anda";
        $message = "Kode Verifikasi: " . $verification_code;

        Mail::raw($message, function ($mail) use ($email, $subject) {
            $mail->to($email)
                ->subject($subject);
        });
    }

    public function showVerifikasi()
    {
        return view('auth.verifikasi');
    }

    public function verifikasi(Request $request)
    {
        $verification_code = $request->session()->get('verification_code');

        // Tentukan batas waktu kadaluarsa (misalnya, 10 menit)
        // $expiry_time = 1; // menit
        // if (now()->diffInMinutes($verification_code) > $expiry_time) {
        //     toast('Kode verifikasi telah kedaluwarsa!', 'error');
        //     return redirect('registrasi');
        // }

        if ($request->verification_code == $verification_code) {
            $user = User::create([
                'email' => $request->session()->get('email'),
                'password' => Hash::make($request->session()->get('password')),
                'role' => 'pengaju',
                'is_verified' => true,
                'email_verified_at' => Carbon::now(),
            ]);

            // Clear session
            $request->session()->forget(['email', 'password', 'verification_code']);

            toast('Berhasil membuat akun', 'success');
            return redirect('login');
        } else {
            toast('Kode verifikasi salah!', 'error');
            return back();
        }
    }

    public function kirimUlangKode(Request $request)
    {
        $email = $request->session()->get('email'); // Ambil email dari sesi

        if (!$email) {
            toast('Email tidak ditemukan!', 'error');
            return redirect('registrasi');
        }

        $request->session()->forget(['verification_code']);

        $verification_code = rand(100000, 999999);
        $request->session()->put('verification_code', $verification_code);

        $subject = "Kode Verifikasi Anda";
        $message = "Kode Verifikasi: " . $verification_code;

        Mail::raw($message, function ($mail) use ($email, $subject) {
            $mail->to($email)
                ->subject($subject);
        });

        toast('Kode verifikasi baru telah dikirim ke email Anda.', 'success');
        return back();
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
