<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('index'); // ini merujuk ke halaman index.blade.php
});

Route::get('/', [HomeController::class, 'index'])->name('home');
