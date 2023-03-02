<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    function index(){
        return view("login");
    }

    function login(Request $request){
        Session::flash('email', $request->email);
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi'
        ]
        );

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];


        if (Auth::attempt($infologin)) {
            // Kalau autentikasi Sukses
            return redirect('/home')->with(['sukses' => 'Berhasil login']);
        }else {
            // Kalau autentikasi gagal
            return redirect('/')->with(['error' => 'Email atau password salah']);
        }
    }

    function logout(){
        Auth::logout();
        return redirect('/')->with('success', 'Berhasil logout');
    }


}
