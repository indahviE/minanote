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

        if ($request->g) {
            $search = $request->g;
            $guru = guru::where("nama_guru", "LIKE", '%' . $search . '%')
            ->paginate(5)
            ->appends(['s'=> $search]);
        } else {
            $guru = guru::paginate(5);
            $search = "";
        }

        $total_guru_laki2 = 0;
        $total_guru_perempuan = 0;
        $total_guru = 0;

        foreach ($guru as $data) {
            if ($data->gender == "lk") {
                $total_guru_laki2++;
            } else {
                $total_guru_perempuan++;
            }

            $total_guru++;
        }

        return view('views_guru', ['guru' => $guru, 'search_key' => $search, 'total_guru_laki2' => $total_guru_laki2, 'total_guru_perempuan' => $total_guru_perempuan, 'total_guru' => $total_guru]);
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
