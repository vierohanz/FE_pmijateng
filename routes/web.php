<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/signIn', function () {
    return view('signIn');
})->name('signIn');

Route::get('/signUp', function () {
    return view('signUp');
})->name('signUp');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/detail', function () {
    return view('detail');
})->name('detail');
