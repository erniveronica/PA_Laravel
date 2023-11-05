<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function show()
    {
        //menampilkan halaman
        return view('admin.login');
    }

    public function login()
    {
        //memvalidasi inputan yang diberikan
        Validator::make(request()->all(), [
            'email' => ['required', 'email'],
            'password' => ['required']
        ])->validate();

        //memeriksa inputan dengan database yang tersimpan
        if(Auth::attempt(request()->only(['email', 'password']))){
            //mengarahkan halaman
            return redirect('/dashboard');
        }

        //jika inputan tidak cocok dengan database yang tersimpan
        return redirect()->back()->withErrors(['email' => 'Email atau Password Salah']);
    }

    public function logout()
    {
        //menghapus sesi otentikasi pengguna
        auth()->logout();
        //mengarahkan halaman
        return redirect('/admin');
    }

}
