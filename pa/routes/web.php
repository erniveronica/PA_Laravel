<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\TempatController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// LOGIN & REGISTER ADMIN
// 1. Login
//menampilkan halaman login
Route::get('/admin', [AuthController::class, 'show'])->name('login');
// memproses data login
Route::post('/login', [AuthController::class, 'login']);
// melakukan logout
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

// 2. Register
//menampilkan halaman tambah akun
Route::get('/tambahAkun', [AdminController::class, 'tambahAkun'])->middleware('auth');
// memproses data register
Route::post('/register', [AuthController::class, 'register']);


// HALAMAN ADMIN
// 1. Dashboard
//menampilkan halaman dashboard (wajib login)
Route::get('/dashboard', [AdminController::class, 'index'])->middleware('auth');

// 2. Tempat Makanan
// menampilkan halaman tempat makanan (lihat data) --> blm fix controllernya blm
Route::get('/lihat_tempat', [TempatController::class, 'index'])->name('admin.tempat.index');
// menampilkan halaman tambah tempat makanan (create data)
Route::get('/tambah_tempat', [TempatController::class, 'create'])->middleware('auth');
Route::post('/tambah_tempat', [TempatController::class, 'store'])->middleware('auth');

// halaman edit tempat makan
Route::get('/edit_tempat/{id}', [TempatController::class, 'halamanEdit'])->middleware('auth');
Route::post('/edit_tempat/{id}', [TempatController::class, 'update'])->middleware('auth');

// halaman hapus tempat makan
Route::get('/hapus_tempat/{id}', [TempatController::class, 'destroy'])->middleware('auth');



// 3. Menu Makanan
// menampilkan halaman menu makanan (lihat data) --> blm fix controllernya blm
Route::get('lihat_menu', [MenuController::class, 'index'])->middleware('auth')->name('admin.menu.index');
// menampilkan halaman dan tambah menu makanan (create data)
Route::get('/tambah_menu', [MenuController::class, 'tempatMakan'])->middleware('auth');
Route::post('/tambah_menu', [MenuController::class, 'store'])->middleware('auth');

// Halaman edit menu makanan
Route::get('/edit_menu/{id}', [MenuController::class, 'edit'])->middleware('auth');
Route::post('/edit_menu/{id}', [MenuController::class, 'update'])->middleware('auth');

// hapus menu makanan
Route::get('/hapus_menu/{id}', [MenuController::class, 'destroy'])->middleware('auth');

// menghitung banyak data di database




// HALAMAN USER
// halaman index
Route::get('/', [UserController::class,'index']);
// halaman lihat tempat makan
Route::get('/products', [UserController::class,'showProduct']);
// halaman detail tempat makan
Route::get('/product-detail/{id}', [UserController::class,'showDetail']);
