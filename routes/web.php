<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/', function () {
    return view('login');
})->name('login1');

Route::post('/login', [UserController::class, 'login'])->name('login');


Route::get('/register', function () {
    return view('register');
})->name('register.form');

Route::post('/create', [UserController::class, 'store'])->name('register');
