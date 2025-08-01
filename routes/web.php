<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\SiswaController;
use App\Models\barang;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function (Request $request) {
    $search = $request->s;

    if($request->s){
        $barang = barang::where('nama_brg', 'LIKE', '%' . $search . '%')->orderByDesc('id')->get();
    }else{
        $barang = barang::orderByDesc('id')->get();
    }
    return view('landing_page', ['barang' => $barang, 'search' => $search]); // menampilkan halaman
});

Route::get('/login', [AuthController::class, 'login_view']);
Route::get('/register', [AuthController::class, 'register_view']);

Route::post('/auth/login', [AuthController::class, 'login']);
Route::post('/auth/register', [AuthController::class, 'register']);
Route::post('/auth/logout', [AuthController::class, 'logout']);

Route::get('/siswa', [SiswaController::class, 'views_siswa']);
Route::get('/siswa/create', [SiswaController::class, 'views_create_siswa']);
Route::get('/siswa/update/{id}', [SiswaController::class, 'views_update_siswa']);

Route::post('/siswa/create', [SiswaController::class, 'create_siswa']);
Route::post('/siswa/update/{id}', [SiswaController::class, 'update_siswa']);
Route::post('/siswa/update/{id}', [SiswaController::class, 'delete_siswa']);

Route::get('/guru', [GuruController::class, 'views_guru']);
Route::get('/guru/create', [GuruController::class, 'views_create_guru']);
Route::get('/guru/update/{id}', [GuruController::class, 'views_update_guru']);

Route::post('/guru/create', [GuruController::class, 'create_guru']);
Route::post('/guru/update/{id}', [GuruController::class, 'update_guru']);
Route::post('/guru/delete/{id}', [GuruController::class, 'delete_guru']);

Route::get('/barang/detail/{id}', [BarangController::class, 'views_detail']);

Route::get('/peminjaman', [PeminjamanController::class, 'views_peminjaman']);
Route::get('/peminjaman/create', [PeminjamanController::class, 'views_create_peminjaman']);
Route::get('/peminjaman/update/{id}', [PeminjamanController::class, 'views_update_peminjaman']);

Route::post('/peminjaman/create', [PeminjamanController::class, 'create_peminjaman']);
Route::post('/peminjaman/update/{id}', [PeminjamanController::class, 'update_peminjaman']);
Route::post('/peminjaman/delete/{id}', [PeminjamanController::class, 'delete_peminjaman']);


Route::get('/history', [PeminjamanController::class, 'views_history']);
Route::post('/peminjaman/done/{id}', [PeminjamanController::class, 'peminjaman_selesai']);
