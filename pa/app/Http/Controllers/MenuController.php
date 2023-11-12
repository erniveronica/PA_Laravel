<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Tempat;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function tempatMakan()
    {
        $tempat = Tempat::all();
        return view('admin.menu.create', ['tempat' => $tempat, 'user' => auth()->user()]);
    }

    public function index()
    {
        //
        $result = Menu::join('tempat', 'menu.tempat_id', '=', 'tempat.id')
            ->select('menu.*', 'tempat.nama as nama_tempat')
            ->get();

        // return response()->json($result);


        return view("admin.menu.index", [
            'user' => auth()->user(),
            'menu' => $result
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // menampilkan halaman tambah menu dan mengirim data pengguna
        return view('admin.menu.create', [
            'user' => auth()->user()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tempat = Tempat::where('nama', $request->input('namaTempatMakan'))->first();
        $tempatId = $tempat->id;

        $menu = new Menu([
            'tempat_id' => $tempatId,
            'admin_id' => auth()->user()->id,
            'nama' => $request->input('nama'),
            'harga' => $request->input('harga'),
        ]);

        $menu->save();

        return redirect()->route("admin.menu.index")->with('success', 'Menu makanan berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        // $menu = Menu::select('*')->where('id', $id)->get();
        //
        $menu = Menu::join('tempat', 'menu.tempat_id', '=', 'tempat.id')
            ->select('menu.*', 'tempat.nama as nama_tempat')
            ->where('menu.id', $id)
            ->get(); 

        return view("admin.menu.edit", [
            'user' => auth()->user(),
            'menu' => $menu
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $menuMakan = Menu::findOrFail($id);

        $menuMakan->update([ 
            'nama' => $request->input('nama'),
            'harga' => $request->input('harga'),
        ]);
        return redirect()->route('admin.menu.index')->with('success', 'Menu makanan berhasil diupdate');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Menu::where('id', $id)->delete();
        return redirect()->route('admin.menu.index')->with('success', 'Data tempat berhasil dihapus');
    }
}
