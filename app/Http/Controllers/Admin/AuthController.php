<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        // Memeriksa email dan password admin
        if (!Auth::guard('admin')->attempt($credentials)) {
            return back()
                ->with('error', 'Email atau password salah!');
        }

        // Memperbarui session
        $request->session()->regenerate();

        // Masuk ke Dashboard
        return redirect()->route('admin.dashboard')
            ->with('success', 'Login berhasil! Selamat datang di Dashboard Admin.');
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login')
            ->with('success', 'Anda berhasil logout.');
    }
}
