<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('public.login');
})->name('login');

Route::post('/login', [
    AuthController::class,
    'login',
])->name('login.process');

Route::post('/logout', [
    AuthController::class,
    'logout',
])->middleware('auth')->name('logout');

Route::get('/dashboard', function () {
    return view('private.dashboard');
})->middleware('auth')->name('dashboard');
