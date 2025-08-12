<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    //

    public function login_view(){
        return view('login'); //menampilkan halaman
    }

    public function login(Request $request){ // form handle login
        // dd($request->all()); //ngecek isi data
        $admin = User::where('email', $request->email)->first(); // ambil satu daata admin yang cocok
        if(!$admin) return redirect('/login')->with('err', 'Akun Email Anda Tidak Ditemukan!'); // fungsi untuk mengarahkan ke halaman tertentu 

        // kalo ada, cek password
        if(Hash::check($request->password, $admin->password)){
            // bikin session
            Auth::login($admin);

            return redirect('/siswa');
        }
        return redirect('/login')->with('err', 'Password Anda Tidak Cocok, Coba Lagi!');
    }

    public function register_view(){
        return view('register'); 
    }

    public function register(Request $request){

        $request['password'] = Hash::make($request->password); // bisa menimpa value
        $request['nama'] = $request->name;
        $account = User::create($request->all());

        $request["user_id"] = $account->id;
        admin::create($request->all());

        // Redirect dan tampilkan pesan sukses
        return redirect('/login')->with('ok', 'Registrasi berhasil, silakan login!');
        // ok = adalah key 
        // Registrasi berhasil, silakan login! = value / isinya
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect('/login')->with('success', 'Thanks for coming.. see u soon');
    }

    public function store(Request $request)
    {
        return redirect()->back()->with('succes', 'login berhasil!');
    }
}
