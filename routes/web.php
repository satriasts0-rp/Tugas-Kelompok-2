<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController; // 1. Pastikan baris ini ada di atas!

Route::get('/', function () {
    return view('welcome');
});

// 2. Cek baris 9 punya Risal, pastikan strukturnya pakai kurung siku [] dan koma yang bener kayak gini:
Route::get('/register', [RegisterController::class, 'showRegister'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);