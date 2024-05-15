<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('landingPage');
});

Route::get('/login', function () {
    return view('login.login');
});

Route::get('/registrasi', function () {
    return view('login.registrasi');
});

// Route::get('/login', [LoginController::class, 'login'])->name('login');