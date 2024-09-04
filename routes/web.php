<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\Auth\AuthController;

Route::get('/', function () {
    return view('index');
})->name('index');
Route::get('/signIn', function () {
    return view('signIn');
})->name('signIn');

Route::post('/signIn',[AuthController::class, 'login'])->name('signIn');

Route::get('/signUp', function () {
    return view('signUp');
})->name('signUp');

Route::post('/signUp',[AuthController::class, 'register'])->name('signUp');

Route::post('/signOut',[AuthController::class, 'logout'])->name('signOut');


Route::get('/auth/redirect', [SocialController::class, 'redirect'])->name('google.redirect');
Route::get('/google/callback', [SocialController::class, 'googleCallback'])->name('google.callback');


Route::get('/profile', function () {
    return view('profile');
})->name('profile');
