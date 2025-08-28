<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\SiswaController;
use App\Http\Middleware\AuthMiddleware;
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
        $barang = barang::where('nama_barang', 'LIKE', '%' . $search . '%')->orderByDesc('id')->get();
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

Route::get('/siswa', [SiswaController::class, 'views_siswa'])->middleware([AuthMiddleware::class]);
Route::get('/siswa/create', [SiswaController::class, 'views_create_siswa'])->middleware([AuthMiddleware::class]);
Route::get('/siswa/update/{id}', [SiswaController::class, 'views_update_siswa'])->middleware([AuthMiddleware::class]);

Route::post('/siswa/create', [SiswaController::class, 'create_siswa'])->middleware([AuthMiddleware::class]);
Route::post('/siswa/update/{id}', [SiswaController::class, 'update_siswa'])->middleware([AuthMiddleware::class]);
Route::post('/siswa/delete/{id}', [SiswaController::class, 'delete_siswa'])->middleware([AuthMiddleware::class]);

Route::get('/guru', [GuruController::class, 'views_guru'])->middleware([AuthMiddleware::class]);
Route::get('/guru/create', [GuruController::class, 'views_create_guru'])->middleware([AuthMiddleware::class]);
Route::get('/guru/update/{id}', [GuruController::class, 'views_update_guru'])->middleware([AuthMiddleware::class]);

Route::post('/guru/create', [GuruController::class, 'create_guru'])->middleware([AuthMiddleware::class]);
Route::post('/guru/update/{id}', [GuruController::class, 'update_guru'])->middleware([AuthMiddleware::class]);
Route::post('/guru/delete/{id}', [GuruController::class, 'delete_guru'])->middleware([AuthMiddleware::class]);

Route::get('/barang', [BarangController::class, 'views_barang'])->middleware([AuthMiddleware::class]);
Route::get('/barang/create', [BarangController::class, 'views_create_barang'])->middleware([AuthMiddleware::class]);
Route::get('/barang/update/{id}', [BarangController::class, 'views_update_barang'])->middleware([AuthMiddleware::class]);

Route::post('/barang/create', [BarangController::class, 'create_barang'])->middleware([AuthMiddleware::class]);
Route::post('/barang/update/{id}', [BarangController::class, 'update_barang'])->middleware([AuthMiddleware::class]);
Route::post('/barang/delete/{id}', [BarangController::class, 'delete_barang'])->middleware([AuthMiddleware::class]);

Route::get('/barang/detail/{id}', [BarangController::class, 'views_detail']);

Route::get('/peminjaman', [PeminjamanController::class, 'views_peminjaman'])->middleware([AuthMiddleware::class]);
Route::get('/peminjaman/create', [PeminjamanController::class, 'views_create_peminjaman'])->middleware([AuthMiddleware::class]);
Route::get('/peminjaman/update/{id}', [PeminjamanController::class, 'views_update_peminjaman'])->middleware([AuthMiddleware::class]);

Route::post('/peminjaman/create', [PeminjamanController::class, 'create_peminjaman'])->middleware([AuthMiddleware::class])->middleware([AuthMiddleware::class]);
Route::post('/peminjaman/update/{id}', [PeminjamanController::class, 'update_peminjaman'])->middleware([AuthMiddleware::class]);
Route::post('/peminjaman/delete/{id}', [PeminjamanController::class, 'delete_peminjaman'])->middleware([AuthMiddleware::class]);


Route::get('/history', [PeminjamanController::class, 'views_history'])->middleware([AuthMiddleware::class]);
Route::post('/peminjaman/done/{id}', [PeminjamanController::class, 'peminjaman_selesai'])->middleware([AuthMiddleware::class]);
