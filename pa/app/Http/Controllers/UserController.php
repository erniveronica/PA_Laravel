<?php

namespace App\Http\Controllers;

use App\Models\Tempat;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){
        $tempat = Tempat::get()->take(4);

        return view('layouts.user', [
            'tempat'=> $tempat
        ]);
    }
    public function showProduct(){
        $tempat = Tempat::get();

        return view('products', [
            'tempat'=> $tempat
        ]);
    }
}
