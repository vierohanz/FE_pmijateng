<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeController;


Route::get('/', HomeController::class)->name('index');
Route::get('/signIn', function () {
    return view('signIn');
})->name('signIn');

Route::post('/signIn', [AuthController::class, 'login'])->name('signIn');

Route::get('/signUp', function () {
    return view('signUp');
})->name('signUp');

Route::post('/signUp', [AuthController::class, 'register'])->name('signUp');

Route::post('/signOut', [AuthController::class, 'logout'])->name('signOut');


Route::get('/auth/redirect', [SocialController::class, 'redirect'])->name('google.redirect');
Route::get('/google/callback', [SocialController::class, 'googleCallback'])->name('google.callback');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/room/details/{id}', [BookingController::class, 'showRoom'])->name('room.details');

Route::get('/package/details/{id}', [BookingController::class, 'showPackage'])->name('package.details');

Route::get('/topbar', function () {
    return view('topbar');
})->name('topbar');
