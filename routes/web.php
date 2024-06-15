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
use Illuminate\Support\Facades\Route;



// Route::get('/profile', function () {
//     Alert::success('Success Title', 'Success Message');
//     return view('profile.userProfile');
// });

Route::get("/", [landingController::class, 'checkLanding']) -> name('landingPage');

Route::get('/login',[loginController::class,'showLoginForm']) -> name('login');

Route::post('/postlogin',[loginController::class,'postlogin']) -> name('postlogin');

Route::get('/registrasi',[registrasiController::class,'checkRegister']) -> name('registrasi');

Route::post('/postregistrasi',[registrasiController::class,'simpanregistrasi']) -> name('postregistrasi');

Route::get('/logout',[loginController::class,'logout']) -> name('logout');

Route::group(['middleware'=> ['auth']], function () {

    Route::middleware('checkRoles:pengaju')->group(function(){

        Route::get('/home', [homeuserController::class, 'index']) -> name('Home');

        Route::get('/profile', [profileController::class, 'profile']) -> name('Profile');

        Route::get('/edit-profile', [profileController::class, 'editprofile']) -> name('editProfile');

        Route::post('/simpan-profile', [profileController::class, 'store']) -> name('simpan-profile');

        Route::get('/edit-pengajuan', [editpengajuanController::class, 'editpengajuan']) -> name('edit-pengajuan');

        Route::get('/cek-verifikasi', [cekverifikasiController::class, 'cekverifikasi']) -> name('cek-verifikasi');

        Route::get('/pendaftaran-users',[pendaftaranController::class,'pendaftaran']) -> name('pendaftaran-users');
    });

    Route::middleware('checkRoles:admin,humas')->group(function () {

        Route::get('/homeAdmin', [homeadminController::class, 'homeAdmin']) -> name('homeAdmin');

    });

});
