<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD

Route::get('/', function () {
    return view('welcome');
});
=======
use App\Http\Controllers\HomeController;

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('index'); // ini merujuk ke halaman index.blade.php
});

Route::get('/', [HomeController::class, 'index'])->name('home');
>>>>>>> d12024cd385c50878b7a6bd87cb001e9bc632614
