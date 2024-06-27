<?php

use App\Http\Controllers\cekverifikasiController;
use App\Http\Controllers\homeadminController;
use App\Http\Controllers\homeuserController;
use App\Http\Controllers\landingController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\registrasiController;
use App\Http\Controllers\editpengajuanController;
use App\Http\Controllers\pendaftaranController;
use App\Http\Controllers\riwayatcetakController;
use Illuminate\Support\Facades\Route;



// Route::get('/profile', function () {
//     Alert::success('Success Title', 'Success Message');
//     return view('profile.userProfile');
// });

Route::get("/", [landingController::class, 'checkLanding'])->name('landingPage');

Route::get('/login', [loginController::class, 'showLoginForm'])->name('login');

Route::post('/postlogin', [loginController::class, 'postlogin'])->name('postlogin');

Route::get('/registrasi', [registrasiController::class, 'checkRegister'])->name('registrasi');

Route::post('/postregistrasi', [registrasiController::class, 'simpanregistrasi'])->name('postregistrasi');

Route::get('/logout', [loginController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth']], function () {

    Route::middleware('checkRoles:pengaju')->group(function () {

        Route::get('/home', [homeuserController::class, 'index'])->name('Home');

        Route::get('/profile', [profileController::class, 'profile'])->name('Profile');

        Route::get('/edit-profile', [profileController::class, 'editprofile'])->name('editProfile');

        Route::post('/simpan-profile', [profileController::class, 'store'])->name('simpan-profile');

        Route::get('/pendaftaran-users', [pendaftaranController::class, 'pendaftaran'])->name('pendaftaran-users');

        Route::post('/post-pendaftaran', [pendaftaranController::class, 'uploadBerkas'])->name('post-pendaftaran');

        Route::get('/edit-pengajuan', [editpengajuanController::class, 'editpengajuan'])->name('edit-pengajuan');

        // Route::delete('/pendaftaran/delete/{id}', [pendaftaranController::class, 'deleteBerkas'])->name('pendaftaran-delete');

        Route::delete('/delete-pengajuan/{id}', [editpengajuanController::class, 'deleteBerkas'])->name('delete-pengajuan');

        Route::get('/cek-verifikasi', [cekverifikasiController::class, 'cekverifikasi'])->name('cek-verifikasi');

        Route::get('/cetak', [riwayatcetakController::class, 'riwayatCetak'])->name('cetak');
    });

    Route::middleware('checkRoles:admin,humas')->group(function () {

        Route::get('/homeAdmin', [homeadminController::class, 'homeAdmin'])->name('homeAdmin');

        Route::get('/cek-berkas', [homeadminController::class, 'cekBerkas'])->name('cekBerkas');

        Route::get('/cek-berkas/{id_pendaftaran}', [homeadminController::class, 'showBerkas'])->name('showBerkas');

        Route::get('/verifikasi/{id_berkaspendaftaran}/{id_pendaftaran}', [homeadminController::class, 'verifikasi'])->name('verifikasi');

        Route::post('/tolak/{id_berkaspendaftaran}/{id_pendaftaran}', [homeadminController::class, 'tolak'])->name('tolak');

        Route::post('editBerkas/{id_berkaspendaftaran}', [homeadminController::class, 'editBerkas'])->name('editBerkas');
    });
});
