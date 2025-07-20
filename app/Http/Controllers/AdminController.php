<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function views_admin()
    {
        $admin = admin::all();

        return view('views_admin', ['admin' => $admin]);
    }

    public function views_create_admin()
    {
        return view('create_admin');
    }

    public function views_update_admin(Request $request, $id)
    {
        $admin = admin::findOrFail($id);

        return view('update_admin', ['data' => $admin]);
    }

    //post

    public function create_admin(Request $request)
    {
        $admin = admin::all();

        admin::create([
            'email' => $request->email,
            'password' => $request->password,
            'nama' => $request->nama
        ]);

        return redirect('/admin');
    }

    public function update_admin(Request $request, $id)
    {
        $admin = admin::findOrFail($id);

        admin::update([
            'email' => $request->email,
            'password' => $request->password,
            'nama' => $request->nama
        ]);

        return redirect('/admin');
    }

    public function delete_admin(Request $request, $id)
    {
        $admin = admin::findOrFail($id);

        $admin->delete();

        return redirect('/admin');
    }

}
