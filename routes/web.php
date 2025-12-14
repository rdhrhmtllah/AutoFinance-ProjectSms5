<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('modules/dashboard/dashboard');
});
Route::get('/login', function () {
    return view('modules/login/login');
})->name('login');
