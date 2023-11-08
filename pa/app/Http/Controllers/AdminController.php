<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index()
    {
        // menampilkan halaman dan mengirim data pengguna
        return view('admin.index', [
            'user' => auth()->user()
        ]);
    }

    // REGISTRASI
    public function tambahAkun() {
        // menampilkan halaman tambah akun dan mengirim data pengguna
        return view('admin.register', [
            'user' => auth()->user()
        ]);
    }
}
