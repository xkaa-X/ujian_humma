<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('pages.index');
    })->name('dashboard');

    Route::get('/profile', function () {
        return view('profile.edit');
    })->name('profile.edit');

    Route::get('/wishlist', function () {
        return view('pages.wishlist');
    })->name('wishlist');

    Route::get('/user', function () {
        return view('pages.user');
    })->name('user');
});


require __DIR__ . '/auth.php';