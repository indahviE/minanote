<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\guru;
use App\Models\barang;
use App\Models\peminjaman;
use App\Models\siswa;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    //

    public function views_peminjaman(Request $request)
    {
        $peminjaman = peminjaman::with(['siswa', 'guru', 'barang'])->where("status", "Dipinjam")->get();
        return view('views_peminjaman', ['peminjaman' => $peminjaman]);
    }

    public function views_create_peminjaman()
    {
        $barang = barang::all();
        $siswa = siswa::all();
        $guru = guru::all();
        return view('create_peminjaman', ['barang' => $barang, 'siswa' => $siswa, 'guru' => $guru]);
    }

    public function views_update_peminjaman(Request $request, $id)
    {
        $peminjaman = peminjaman::findOrFail($id);
        return view('update_peminjaman', ['data' => $peminjaman]);
    }

    //post
    public function create_peminjaman(Request $request)
    {
        // lakukan pengecekan dahulu
        // cek apakah stok yang diminta cukup
        $barang = barang::findOrFail($request->barang_id);
        $admin = admin::where('user_id', Auth::user()->id)->first();

        if ($request->jml_pinjam > $barang->stock)
            return redirect('/peminjaman/create')->with('err', 'Permintaan Jumlah Pinjam tidak valid dengan stock yang tersedia');

        // cek yang minjem guru or siswa
        if ($request->entitas_peminjam == "Siswa") $request['guru_id'] = null;
        if ($request->entitas_peminjam == "Guru") $request['siswa_id'] = null;

        peminjaman::create([
            'siswa_id' => $request->siswa_id,
            'guru_id' => $request->guru_id,
            'admin_id' => $admin->id,
            'barang_id' => $request->barang_id,
            'tgl_pinjam' => $request->tgl_pinjam,
            'tgl_kembali' => $request->tgl_kembali,
            'jml_pinjam' => $request->jml_pinjam,
            'status' => "Dipinjam",
            'entitas_peminjam' => $request->entitas_peminjam,
            'gender' =>$request->gender
        ]);

        // jika sudah pinjam maka kurangi stok barang
        $barang->update([
            'stock' => $barang->stock - $request->jml_pinjam
        ]);

        return redirect('/peminjaman')->with('succes', 'Data berhasil dibuat!');
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
            'entitas_peminjam' => $request->entitas_peminjam,
            'gender' =>$request->gender
        ]);

        return redirect('/peminjaman')->with('ok', 'Data berhasil ter-update!');
    }

    public function delete_peminjaman(Request $request, $id)
    {
        $peminjaman = peminjaman::findOrFail($id);

        $peminjaman->delete();

        return redirect('/peminjaman')->with('oke', 'Data berhasil terhapus!');
    }

    public function views_history()
    {
        $peminjaman = peminjaman::with(['siswa', 'guru', 'barang'])->where("status", "Selesai")->get();
        return view('views_history', ['peminjaman' => $peminjaman]);
    }

    public function peminjaman_selesai(Request $request, $id)
    {
        $peminjaman = peminjaman::findOrFail($id);
        $barang = barang::findOrFail($id);

        $peminjaman->update([
            'status' => "Selesai"
        ]);

        // jika peminjaman selesai, kembalikan stock barang (stock barang saat ini + jumlh barang yg telah dipinjam)
        $barang->update([
            'stock' => $barang->stock + $peminjaman->jml_pinjam
        ]);

        return redirect('/peminjaman');
    }
}
