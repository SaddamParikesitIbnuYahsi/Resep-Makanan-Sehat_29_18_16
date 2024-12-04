<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Rute untuk halaman welcome
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('dinner');
});

