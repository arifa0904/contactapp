<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

// Route::get('/login', function () {
//     return view('login');
// })->name('login');
use App\Http\Controllers\AuthController;



Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']); // Tambahkan POST method untuk login


Route::get('/register', function () {
    return view('register');
})->name('register');


// Menampilkan form register
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');

// Mengirim data register (POST)
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

