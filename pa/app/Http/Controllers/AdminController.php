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

    public function tambahData() {
        return view('admin.tambahData', ['user' => auth()->user()]);
    }
}
