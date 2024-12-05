<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('index'); // ini merujuk ke halaman index.blade.php
});
Route::get('/breakfast', function () {
    return view('breakfast'); // ini merujuk ke halaman index.blade.php
});
Route::get('/dinner', function () {
    return view('dinner'); // ini merujuk ke halaman index.blade.php
});
Route::get('/sopbening', function () {
    return view('sopbening'); // ini merujuk ke halaman index.blade.php
});
Route::get('/dori', function () {
    return view('dori'); // ini merujuk ke halaman index.blade.php
});
Route::get('/sapi', function () {
    return view('sapi'); // ini merujuk ke halaman index.blade.php
});
Route::get('/pecel', function () {
    return view('pecel'); // ini merujuk ke halaman index.blade.php
});
Route::get('/ayap', function () {
    return view('ayap'); // ini merujuk ke halaman index.blade.php
});
Route::get('/blackpep', function () {
    return view('blackpep'); // ini merujuk ke halaman index.blade.php
});
Route::get('/suwir', function () {
    return view('suwir'); // ini merujuk ke halaman index.blade.php
});
Route::get('/bola', function () {
    return view('bola'); // ini merujuk ke halaman index.blade.php
});
Route::get('/pasta', function () {
    return view('pasta'); // ini merujuk ke halaman index.blade.php
});
Route::get('/oatmeal', function () {
    return view('oatmeal'); // ini merujuk ke halaman index.blade.php
});
Route::get('/pancake', function () {
    return view('pancake'); // ini merujuk ke halaman index.blade.php
});
Route::get('/smoothies', function () {
    return view('smoothies'); // ini merujuk ke halaman index.blade.php
});
Route::get('/sandwich', function () {
    return view('sandwich'); // ini merujuk ke halaman index.blade.php
});
Route::get('/salad', function () {
    return view('salad'); // ini merujuk ke halaman index.blade.php
});
Route::get('/capcay', function () {
    return view('capcay'); // ini merujuk ke halaman index.blade.php
});
Route::get('/tahu', function () {
    return view('tahu'); // ini merujuk ke halaman index.blade.php
});
Route::get('/omlet', function () {
    return view('omlet'); // ini merujuk ke halaman index.blade.php
});
Route::get('/sda', function () {
    return view('sda'); // ini merujuk ke halaman index.blade.php
});
Route::get('/cu', function () {
    return view('cu'); // ini merujuk ke halaman index.blade.php
});
Route::get('/gurame', function () {
    return view('gurame'); // ini merujuk ke halaman index.blade.php
});
Route::get('/nasi', function () {
    return view('nasi'); // ini merujuk ke halaman index.blade.php
});
Route::get('/pepes', function () {
    return view('pepes'); // ini merujuk ke halaman index.blade.php
});
Route::get('/steak', function () {
    return view('steak'); // ini merujuk ke halaman index.blade.php
});
Route::get('/sate', function () {
    return view('sate'); // ini merujuk ke halaman index.blade.php
});


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/breakfast', [HomeController::class, 'breakfast'])->name('sarapan');
Route::get('/breakfast', [HomeController::class, 'breakfast'])->name('dinner');
