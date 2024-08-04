<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class gantiPasswordController extends Controller
{
    public function showFormGantiPassword(){
        return view('auth.ganti_password');
    }

    public function changePassword(Request $request)
    {
        // Validasi input
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);

        // Verifikasi password lama
        $user = Auth::user();
        if (!Hash::check($request->old_password, $user->password)) {
            return back()->withErrors(['old_password' => 'Password lama tidak cocok.']);
        }

        // Update password
        $user->password = Hash::make($request->new_password);
        $user->save();

        // Flash message dan redirect
        toast('Password berhasil diubah!', 'success');
        return redirect()->back();
    }
}
