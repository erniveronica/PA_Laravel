<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Tempat;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index()
    {
        $dataTempat = Tempat::count('id');
        $dataMakan = Menu::count('id');
        $dataAdmin = User::count('id');

        // return view('admin.index',compact($dataTempat));
        // menampilkan halaman dan mengirim data pengguna
        return view('admin.index', [
            'user' => auth()->user(),
            'dataTempat'=> $dataTempat,
            'dataMakan'=> $dataMakan,
            'dataAdmin'=> $dataAdmin,

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
