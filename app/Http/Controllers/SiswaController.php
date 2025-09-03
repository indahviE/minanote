<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use Illuminate\Http\Request;
use Psy\TabCompletion\Matcher\FunctionsMatcher;
use Illuminate\Support\Facades\Auth;

class SiswaController extends Controller
{
    //

    public function views_siswa(Request $request)
    {

        if($request->s){
            $search = $request->s;
            $siswa = siswa::where("nama_siswa", "LIKE", '%' . $search . '%')
            ->paginate(5)
            ->appends(['s' => $search]);
        }else{
            $siswa = siswa::paginate(5);
            $search = "";
        }

        $total_siswa_laki2 = 0;
        $total_siswa_perempuan = 0;
        $total_siswa = 0;

        foreach ($siswa as $data) {

            if ($data->gender == "lk") {
                $total_siswa_laki2++;
            } else {
                $total_siswa_perempuan++;
            }

            $total_siswa++;
        }

        return view('views_siswa', ['siswa' => $siswa, 'search_key' => $search, 'total_siswa_laki2' => $total_siswa_laki2, 'total_siswa_perempuan' => $total_siswa_perempuan, 'total_siswa' => $total_siswa]);
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
            'jurusan' => $request->jurusan,
            'nisn' => $request->nisn,
            'gender' => $request->gender
        ]);

        return redirect('/siswa')->with('succes', 'Siswa berhasil ter-catat!');
    }

    public function update_siswa(Request $request, $id)
    {
        $siswa = siswa::findOrFail($id);

        $siswa->update([
            'nama_siswa' => $request->nama_siswa,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan,
            'nisn' => $request->nisn,
             'gender' => $request->gender
        ]);

        return redirect('/siswa')->with('ok', 'Siswa berhasil ter-update!');
    }

    public function delete_siswa(Request $request, $id)
    {
        $siswa = siswa::findOrFail($id);

        $siswa->delete();

        return redirect('/siswa')->with('okk', 'Siswa berhasil ter-hapus!');
    }
}
