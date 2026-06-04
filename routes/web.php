<?php

use Illuminate\Support\Facades\Route;

// 1. Halaman Login Utama (Akses lewat 127.0.0.1:8000/ atau /login)
Route::get('/', function () {
    return view('welcome'); // Membuka file welcome.blade.php yang ada di folder views
});
Route::get('/login', function () {
    return view('welcome');
});

// 2. Halaman Register (Membuka file register yang baru dibuat di dalam folder auth)
Route::get('/register', function () {
    return view('auth.register');
});

// 3. Halaman Dashboard (Membuka file dashboard.blade.php yang ada di folder views)
Route::get('/dashboard', function () {
    return view('dashboard');
});