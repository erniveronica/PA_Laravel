<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
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

// HALAMAN ADMIN

//menampilkan halaman dashboard (wajib login)
Route::get('/dashboard', [AdminController::class, '__invoke'])->middleware('auth');
//menampilkan halaman login
Route::get('/admin', [AuthController::class, 'show'])->name('login');
// memproses data login
Route::post('/login', [AuthController::class, 'login']);
// melakukan logout
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');
