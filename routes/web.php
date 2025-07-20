<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('landing_page'); //menampilkan halaman
});

Route::get('/login', [AuthController::class, 'login_view']);
Route::get('/register', [AuthController::class, 'views_register']);

Route::post('/auth/login', [AuthController::class, 'login']);
Route::post('/auth/register', [AuthController::class, 'register']);
Route::post('/auth/logout', [AuthController::class, 'logout']);

Route::get('/siswa', [SiswaController::class, 'views_siswa']);
Route::get('/siswa/create', [SiswaController::class, 'views_create_siswa']);
Route::get('/siswa/update{id}', [SiswaController::class, 'views_update_siswa']);

Route::post('/siswa/create', [SiswaController::class, 'create_siswa']);
Route::post('/siswa/update/{id}', [SiswaController::class, 'update_siswa']);
Route::post('/siswa/update/{id}', [SiswaController::class, 'delete_siswa']);

Route::get('/guru', [GuruController::class, 'views_guru']);
Route::get('/guru/create', [GuruController::class, 'views_create_guru']);
Route::get('/guru/update/{id}', [GuruController::class, 'views_update_guru']);

Route::post('/guru/create', [GuruController::class, 'create_guru']);
Route::post('/guru/update/{id}', [GuruController::class, 'update_guru']);
Route::post('/guru/delete/{id}', [GuruController::class, 'delete_guru']);
