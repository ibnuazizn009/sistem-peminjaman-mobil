<?php

use App\Http\Controllers\MobilController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengembalianController;
use App\Http\Controllers\UserController;
use App\Models\Peminjaman;
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
    return view('welcome');
});

// User
Route::get('/register', [UserController::class, 'index']);
Route::post('/register/create', [UserController::class, 'create']);

// Mobil
Route::get('/list-mobil', [MobilController::class, 'index']);
Route::get('/list-mobil/add', [MobilController::class, 'tambah']);
Route::post('/list-mobil/add', [MobilController::class, 'create']);

// Peminjaman
Route::get('/peminjaman-mobil', [PeminjamanController::class, 'index']);
Route::post('/peminjaman-mobil/add', [PeminjamanController::class, 'create']);
Route::get('/list-peminjaman', [PeminjamanController::class, 'peminjaman']);

// Pengembalian
Route::get('/pengembalian-mobil', [PengembalianController::class, 'index']);
Route::get('/pengembalian-mobil/add', [PengembalianController::class, 'create']);
