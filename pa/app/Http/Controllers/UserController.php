<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Tempat;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        $tempat = Tempat::get()->take(4);

        return view('welcome', [
            'tempat' => $tempat
        ]);
    }
    public function showProduct()
    {
        $tempat = Tempat::get();

        return view('products', [
            'tempat' => $tempat
        ]);
    }

    public function showDetail($id)
    {
        $result = Menu::join('tempat', 'menu.tempat_id', '=', 'tempat.id')
            ->where('tempat.id', '=', $id)
            ->select('menu.*', 'tempat.*', 'tempat.nama as nama_tempat', 'menu.nama as nama_menu') // Pilih semua kolom dari menu dan tempat
            ->get();

        if ($result->isEmpty()) {
            $result = Tempat::select('*')
                ->where('id', $id)
                ->get();
                // return response()->json($result);
            return view("detail", [
                'result' => $result
            ]);
        } else {
            return view('detail', [
                'result' => $result
            ]);
        }
    }
}
