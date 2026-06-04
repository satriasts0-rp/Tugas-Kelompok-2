<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    // 1. Menampilkan halaman form register
    public function showRegister()
    {
        return view('auth.register');
    }

    // 2. Memproses data register
    public function register(Request $request)
    {
        // Kosongkan dulu sementara
    }
}