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
            'email' => 'required',
            'password' => 'required'
        ]);


        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            return redirect('dashboard');
        } else {
            return redirect('')->withInput();
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('');
    }


}
