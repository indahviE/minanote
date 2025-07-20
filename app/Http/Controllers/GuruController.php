<?php

namespace App\Http\Controllers;

use App\Models\guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    //

    public function views_guru()
    {
        $guru = guru::all();

        return view('views_guru', ['guru' => $guru]);
    }

    public function views_create_guru()
    {
        return view('create_guru');
    }

    public function views_update_guru(Request $request, $id)
    {
        $guru = guru::findOrFail($id);

        return view('update_guru', ['data' => $guru]);
    }

    //post

    public function create_guru(Request $request)
    {
        $guru = guru::all();

        guru::create([
            'nama_guru' => $request->nama_guru,
            'no_telp' => $request->no_telp
        ]);

        return redirect('/guru');
    }

    public function update_guru(Request $request, $id)
    {
        $guru = guru::findOrFail($id);

        guru::update([
            'nama_guru' => $request->nama_guru,
            'no_telp' => $request->no_telp
        ]);

        return redirect('/guru');
    }

    public function delete_guru(Request $request, $id)
    {
        $guru = guru::findOrFail($id);

        $guru->delete();

        return redirect('/guru');
    }

}
