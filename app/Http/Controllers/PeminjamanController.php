<?php

namespace App\Http\Controllers;

use App\Models\peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    //

    public function views_peminjaman()
    {
        $peminjaman = peminjaman::all();

        return view('views_peminjaman', ['peminjaman' => $peminjaman]);
    }

    public function views_create_peminjaman()
    {
        return view('create_peminjaman');
    }

    public function views_update_peminjaman(Request $request, $id)
    {
        $peminjaman = peminjaman::findOrFail($id);

        return view('update_peminjaman', ['data' => $peminjaman]);
    }

    //post

    public function create_peminjaman(Request $request)
    {
        $peminjaman = peminjaman::all();

        peminjaman::create([
            'siswa_id' => $request->siswa_id,
            'guru_id' => $request->guru_id,
            'barang_id' => $request->barang_id,
            'admin_id' => $request->admin_id,
            'tgl_pinjam' => $request->tgl_pinjam,
            'tgl_kembali' => $request->tgl_kembali,
            'jml_pinjam' => $request->jml_pinjam,
            'status' => $request->status,
            'entitas_peminjam' => $request->entitas_peminjam
        ]);

        return redirect('/peminjaman');
    }

    public function update_peminjaman(Request $request, $id)
    {
        $peminjaman = peminjaman::findOrFail($id);

        peminjaman::update([
            'siswa_id' => $request->siswa_id,
            'guru_id' => $request->guru_id,
            'barang_id' => $request->barang_id,
            'admin_id' => $request->admin_id,
            'tgl_pinjam' => $request->tgl_pinjam,
            'tgl_kembali' => $request->tgl_kembali,
            'jml_pinjam' => $request->jml_pinjam,
            'status' => $request->status,
            'entitas_peminjam' => $request->entitas_peminjam
        ]);

        return redirect('/peminjaman');
    }

    public function delete_peminjaman(Request $request, $id)
    {
        $peminjaman = peminjaman::findOrFail($id);

        $peminjaman->delete();

        return redirect('/peminjaman');
    }

}

