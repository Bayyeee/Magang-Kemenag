<?php

use App\Http\Controllers\cekverifikasiController;
use App\Http\Controllers\homeadminController;
use App\Http\Controllers\homeuserController;
use App\Http\Controllers\landingController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\registrasiController;
use App\Http\Controllers\editpengajuanController;
use App\Http\Controllers\inputPegawaiController;
use App\Http\Controllers\inputSiswaController;
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

        Route::get('/cetak-surat/{id_pendaftaran}/{action}', [riwayatcetakController::class, 'cetakSurat'])->name('cetak-surat');

        Route::get('/input-pegawai', [inputPegawaiController::class, 'showHalaman'])->name('input-pegawai');

        Route::post('/simpan-pegawai', [inputPegawaiController::class, 'simpanPegawai'])->name('simpan-pegawai');

        Route::get('/edit-pegawai/{id}', [inputPegawaiController::class, 'editPegawai'])->name('edit-pegawai');

        Route::post('/update-pegawai/{id}', [inputPegawaiController::class, 'updatePegawai'])->name('update-pegawai');

        Route::get('/pegawai/{id}', [inputPegawaiController::class, 'getPegawai'])->name('get-pegawai');

        Route::delete('/hapus-pegawai/{id}', [inputPegawaiController::class, 'hapusPegawai'])->name('hapus-pegawai');

        Route::post('/import-pegawai', [inputPegawaiController::class, 'imporPegawai'])->name('impor-pegawai');

        Route::get('/export-pegawai', [inputPegawaiController::class, 'pegawaiExport'])->name('export-pegawai');

        Route::get('/input-siswa', [inputSiswaController::class, 'showSiswa'])->name('show-Siswa');

        Route::post('/simpan-siswa', [inputSiswaController::class, 'simpanSiswa'])->name('simpan-siswa');
    });

    Route::middleware('checkRoles:admin,humas')->group(function () {

        Route::get('/homeAdmin', [homeadminController::class, 'homeAdmin'])->name('homeAdmin');

        Route::get('/cek-berkas', [homeadminController::class, 'cekBerkas'])->name('cekBerkas');

        Route::get('/cek-berkas/{id_pendaftaran}', [homeadminController::class, 'showBerkas'])->name('showBerkas');

        Route::get('/verifikasi/{id_berkaspendaftaran}/{id_pendaftaran}', [homeadminController::class, 'verifikasi'])->name('verifikasi');

        Route::post('/tolak/{id_berkaspendaftaran}/{id_pendaftaran}', [homeadminController::class, 'tolak'])->name('tolak');

        Route::post('editBerkas/{id_berkaspendaftaran}', [homeadminController::class, 'editBerkas'])->name('editBerkas');

        // Route::get('/cetak-berkas/{id_pendaftaran}', [homeadminController::class, 'cetakBerkas'])->name('cetakBerkas');
    });
});
