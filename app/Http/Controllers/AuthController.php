<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
        // Method untuk menampilkan form login
        public function showLoginForm()
        {
            return view('login');
        }
        
        public function login(Request $request)
    {
        // Tambahkan logika autentikasi jika diperlukan
        return redirect('/contact');  // Arahkan ke halaman contact setelah login
    }

    // Menampilkan form register
    public function showRegisterForm()
    {
        return view('register');
    }

    // Proses registrasi
    public function register(Request $request)
    {
        // Validasi data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Membuat pengguna baru
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Redirect ke halaman login setelah berhasil registrasi
        return redirect()->route('login')->with('success', 'Registration successful! Please login.');
    }
}


