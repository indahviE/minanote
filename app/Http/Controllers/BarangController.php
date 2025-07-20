<?php

namespace App\Http\Controllers;

use App\Models\barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    //

    public function views_barang()
    {
        $barang = barang::all();

        return view('views_barang', ['barang' => $barang]);
    }

    public function views_create_barang()
    {
        return view('create_barang');
    }

    public function views_update_barang(Request $request, $id)
    {
        $barang = barang::findOrFail($id);

        return view('update_barang', ['data' => $barang]);
    }

    //post

    public function create_barang(Request $request)
    {
        $barang = barang::all();

        barang::create([
            'nama_brg' => $request->nama_brg,
            'stock' => $request->stock,
            'jml_pinjam' => $request->jml_pinjam,
            'kelayakan' => $request->kelayakan,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect('/barang');
    }

    public function update_barang(Request $request, $id)
    {
        $barang = barang::findOrFail($id);

        barang::update([
            'nama_brg' => $request->nama_brg,
            'stock' => $request->stock,
            'jml_pinjam' => $request->jml_pinjam,
            'kelayakan' => $request->kelayakan,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect('/barang');
    }

    public function delete_barang(Request $request, $id)
    {
        $barang = barang::findOrFail($id);

        $barang->delete();

        return redirect('/barang');
    }

}
