<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use Illuminate\Http\Request;
use Psy\TabCompletion\Matcher\FunctionsMatcher;

class SiswaController extends Controller
{
    //

    public function views_siswa()
    {
        $siswa = siswa::all();

        return view('views_siswa', ['siswa' => $siswa]);
    }

    public function views_create_siswa()
    {
        return view('create_siswa');
    }

    public function views_update_siswa(Request $request, $id)
    {
        $siswa = siswa::findOrFail($id);

        return view('update_siswa', ['data' => $siswa]);
    }

    //post

    public function create_siswa(Request $request)
    {
        $siswa = siswa::all();

        siswa::create([
            'nama_siswa' => $request->nama_siswa,
            'kelas' => $request->kelas,
            'nisn' => $request->nisn
        ]);

        return redirect('/siswa');
    }

    public function update_siswa(Request $request, $id)
    {
        $siswa = siswa::findOrFail($id);

        siswa::update([
            'nama_siswa' => $request->nama_siswa,
            'kelas' => $request->kelas,
            'nisn' => $request->nisn
        ]);

        return redirect('/siswa');
    }

    public function delete_siswa(Request $request, $id)
    {
        $siswa = siswa::findOrFail($id);

        $siswa->delete();

        return redirect('/siswa');
    }
}
