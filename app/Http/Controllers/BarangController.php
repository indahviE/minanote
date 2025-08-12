<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Models\peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BarangController extends Controller
{
    //

    public function views_barang(Request $request)
    {

        if ($request->s) {
            $search = $request->s;
            $barang = barang::where("nama_barang", "LIKE", '%' . $search . '%')->get();
        } else {
            $barang = barang::all();
            $search = "";
        }

        return view('views_barang', ['barang' => $barang, 'search_key' => $search]);
    }

    public function views_detail(Request $request, $id)
    {
        $barang = barang::findOrFail($id);
        $orang_yang_meminjam_barang_ini = peminjaman::with(['siswa', 'guru', 'barang'])->where("barang_id", $id)->where('status', 'Dipinjam')->get();

        return view('detail_barang', ['barang' => $barang, 'orang_yang_meminjam' => $orang_yang_meminjam_barang_ini]);
    }

    public function views_detail(Request $request, $id){
        $barang = barang::findOrFail($id);
        $orang_yang_meminjam_barang_ini = peminjaman::with(['siswa', 'guru', 'barang'])->where("barang_id", $id)->where('status', 'Dipinjam')->get();

        return view('detail_barang', ['barang' => $barang, 'orang_yang_meminjam' => $orang_yang_meminjam_barang_ini]);
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

        //handle foto
        if($request->hasFile('file_foto')){
            $file = $request->file('file_foto'); 
            $path = $file->store('public/store'); // menampung lokasi file disimpan dalam projek : public/store/...
            $file_url = Storage::url($path); // untuk mendapatkan filesupaya bisa tampil di web 

            $request['foto'] = $file_url;
        }

        $request['like'] = 0; // set default like dari 0

        // dd($request->all());
        barang::create($request->all()); 
        return redirect('/barang')->with('succes', 'Data telah terbuat!');
    }

    public function update_barang(Request $request, $id)
    {
        $barang = barang::findOrFail($id);

        //handle foto
       if($request->hasFile('file_foto')){
            $file = $request->file('file_foto'); // simpan file dalam variabel
            $path = $file->store('public/store'); // menampung lokasi file disimpan dalam projek : public/store/...
            $file_url = Storage::url($path); // untuk mendapatkan filesupaya bisa tampil di web : http://...

            $request['foto'] = $file_url; // tambahkan $request[foto] agar bisa tersimpan di database
        }

        $barang->update($request->all());
        return redirect('/barang')->with('ok', 'Data telah ter-update');
    }

    public function delete_barang(Request $request, $id)
    {
        $barang = barang::findOrFail($id);

        $barang->delete();

        return redirect('/barang')->with('okk', 'Data telah terhapus!');
    }
}
