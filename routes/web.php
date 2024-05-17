<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\landingController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registrasiController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('landingPage');
// });

Route::get("/", [landingController::class, 'checkLanding']) -> name('landingPage');

Route::get('/login',[loginController::class,'login']) -> name('login');

Route::post('/postlogin',[loginController::class,'postlogin']) -> name('postlogin');

Route::get('/registrasi',[registrasiController::class,'checkRegister']) -> name('registrasi');

Route::post('/postregistrasi',[registrasiController::class,'simpanregistrasi']) -> name('postregistrasi');

Route::get('/logout',[loginController::class,'logout']) -> name('logout');

Route::group(['middleware'=> ['auth']], function () {
    
    Route::get('/home', [homeController::class, 'index']) -> name('Home');

});