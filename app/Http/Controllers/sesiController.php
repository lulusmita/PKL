<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User; // Pastikan Anda mengimpor model User
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\PasswordReset;
use Illuminate\Support\Facades\Request as FacadesRequest;

class sesiController extends Controller
{
    function index()
    {
        return view('startingPage');
    }

    function resetpw()
    {
        return view('resetpw');
    }

    public function sendResetLinkEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $email = $request->email;

        $user = User::where('email', $email)->first();

        if (!$user || $user->role != 'Admin') {
            return redirect()->route('adminpage')->with('errors', 'Access denied ! only admin can perform this action.');
        }

        $token = Str::random(6);

        // Simpan token di database
        PasswordReset::create([
            'email' => $email,
            'token' => $token,
            'created_at' => Carbon::now(),
        ]);

        // Kirim email secara langsung
        Mail::send('resetemail', ['token' => $token], function ($message) use ($email) {
            $message->to($email);
            $message->subject('Password Reset');
        });

        $request->session()->put('reset_form_submitted', true);

        // Redirect ke halaman reset password dengan pesan sukses
        return redirect()->route('resetpass')->with('success', 'We have emailed your password reset token!');
    }

    public function reset(Request $request)
    {
        $request->validate([
            'token' => 'required|size:6',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        $tokenData = PasswordReset::where('token', $request->token)->where('email', $request->email)->first();

        if (!$tokenData) {
            return back()->withErrors(['email' => 'Token is invalid!']);
        }

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->withErrors(['email' => 'Email not found!']);
        }

        $user->password = bcrypt($request->password);
        $user->save();

        PasswordReset::where('email', $request->email)->delete();

        $request->session()->forget('reset_form_submitted');

        return redirect('/')->with('success', 'Password has been reset!');
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
