<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User; // Pastikan Anda mengimpor model User

class sesiController extends Controller
{
    function index()
    {
        return view('startingPage');
    }

    function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8|max:16',
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        // Coba autentikasi pengguna
        if (Auth::attempt($infologin)) {
            $user = Auth::user();
            
            // Cek apakah password sama dengan NIK
            if ($request->password === $user->nik) {
                
                // Redirect ke halaman penggantian password dengan pesan
                return redirect('changepw')->withErrors(['changepw' => 'Please change your password first']);
            }

            // Jika tidak, arahkan ke dashboard
            return redirect('dashboard');
        } else {
            return redirect()->back()->withErrors(['login' => 'Login failed']);
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('');
    }
}
