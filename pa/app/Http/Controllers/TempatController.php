<?php

namespace App\Http\Controllers;

use App\Models\Tempat;
use Illuminate\Http\Request;

class TempatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $tempat = Tempat::all();
        return view("admin.tempat.index", [
            'user' => auth()->user(),
            'tempat' => $tempat
        ]);
    }




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // menampilkan halaman tambah tempat dan mengirim data pengguna
        return view('admin.tempat.create', [
            'user' => auth()->user()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $file = $request->file('gambar');

        $nama_file = time() . "_" . $file->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload, $nama_file);
        //
        // $gambarPath =  ->store('post-image');
        // $validateData = $request->validate([
        //     'nama'=> 'required|string|max:255',
        //     'alamat'=> 'required|string|max:255',
        //     'jam_buka' => 'required',
        //     'jam_tutup' => 'required',
        //     'gambar' => $gambarPath,
        // ]);

        $tempatMakan = new Tempat([
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
            'jam_buka' => $request->input('jam_buka'),
            'jam_tutup' => $request->input('jam_tutup'),
            'gambar' => $nama_file,
            'link_maps' => $request->input('link_maps'),
            'kontak' => $request->input('kontak'),
            'admin_id' => $request->user()->id,
        ]);
        $tempatMakan->save();
        // Tempat::create($validateData);

        return redirect()->route('admin.tempat.index');
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
    public function edit(string $id)
    {
        //
    }

    public function halamanEdit($id)
    {
        $tempat = Tempat::select('*')
            ->where('id', $id)
            ->get();
        return view("admin.tempat.edit", [
            'user' => auth()->user(),
            'tempat' => $tempat
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        // return id. if not found, return error
        $tempatMakan = Tempat::findOrFail($id);
        

        $tempatMakan->update([
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
            'jam_buka' => $request->input('jam_buka'),
            'jam_tutup' => $request->input('jam_tutup'),
            'link_maps' => $request->input('link_maps'),
            'kontak' => $request->input('kontak'),
        ]);

        $file = $request->file('gambar');
        $tujuan_upload = 'data_file';

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $tujuan_upload = 'data_file';
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $file->move($tujuan_upload, $nama_file);
        }

        if ($tempatMakan->gambar && file_exists($tujuan_upload . '/' . $tempatMakan->gambar)) {
            unlink($tujuan_upload . '/' . $tempatMakan->gambar);
        } else {
            $gambar = $tempatMakan->gambar;
            $tempatMakan->update(['gambar' => $gambar]);
        }

        // Update field gambar dengan nama file yang baru
        $tempatMakan->update(['gambar' => $nama_file]);

        return redirect()->route('admin.tempat.index')->with('success', 'Data tempat berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Tempat::where(  'id', $id)->delete();
        return redirect()->route('admin.tempat.index');
    }
}
