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

Route::get('/attendance', function () {
    return view('private.attendance');
})->middleware('auth')->name('attendance');

Route::get('/activity', function () {
    return view('private.activity');
})->middleware('auth')->name('activity');

Route::get('/employee', function () {
    return view('private.employee');
})->middleware('auth')->name('employee');
