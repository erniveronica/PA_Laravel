<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __invoke()
    {
        // menampilkan halaman dan mengirim data pengguna
        return view('admin.index', [
            'user' => auth()->user()
        ]);
    }
}
