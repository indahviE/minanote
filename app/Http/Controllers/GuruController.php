<?php

namespace App\Http\Controllers;

use App\Models\guru;
use App\Models\siswa;
use Illuminate\Http\Request;
use Psy\TabCompletion\Matcher\FunctionsMatcher;
use Illuminate\Support\Facades\Auth;

class GuruController extends Controller
{
    //

    public function views_guru(Request $request)
    {

        if($request->g){
            $search = $request->g;
            $guru = guru::where("nama_guru", "LIKE", '%' . $search . '%')->get();
        }else{
            $guru = guru::all();
            $search = "";
        }

        return view('views_guru', ['guru' => $guru, 'search_key' => $search]);
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
            'no_telp' => $request->no_telp,
            'gender' => $request->gender
        ]);

        return redirect('/guru')->with('succes', 'Guru berhasil ter-catat!');
    }

    public function update_guru(Request $request, $id)
    {
        $guru = guru::findOrFail($id);

        $guru->update([
           'nama_guru' => $request->nama_guru,
            'no_telp' => $request->no_telp,
            'gender' => $request->gender
        ]);

        return redirect('/guru')->with('ok', 'Guru berhasil ter-update!');
    }

    public function delete_guru(Request $request, $id)
    {
        $guru = guru::findOrFail($id);

        $guru->delete();

        return redirect('/guru')->with('okk', 'Guru berhasil ter-hapus!');
    }
}
