<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        return redirect()->back()->withErrors(['email' => 'Email atau password salah']);
    }

    public function logout()
    {
        //menghapus sesi otentikasi pengguna
        auth()->logout();
        //mengarahkan halaman
        return redirect('/admin');
    }

    public function register(Request $request)
    {
        //memvalidasi inputan yang diberikan
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        //jika validasi gagal
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        //membuat user baru
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        //mengarahkan halaman
        return redirect('/tambahAkun')->with('success', 'Akun berhasil ditambahkan');;
    }

}
