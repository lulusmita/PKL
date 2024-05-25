<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

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

        if (Auth::attempt($infologin)) {
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
