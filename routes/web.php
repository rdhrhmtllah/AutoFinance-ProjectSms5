<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('modules/dashboard/dashboard');
});
Route::get('/login', function () {
    return view('modules/login/login');
})->name('login');
Route::get('/formInput', function () {
    return view('modules/formInput/formInput');
})->name('formInput');
Route::get('/login', function () {
    return view('modules.login.login');
});

Route::get('/register', function () {
    return view('modules.login.register');
});