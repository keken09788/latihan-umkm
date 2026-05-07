<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\kategoriController;
use App\Http\Controllers\KelolaUserController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'login_post'])->name('login.post');

Route::get('/daftar', [AuthController::class, 'daftar'])->name('daftar');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/admin/users', [KelolaUserController::class, 'admin'])->name('admin.kelolauser');
Route::get('/admin/kategori', [kategoriController::class, 'admin'])->name('admin.kategori');
Route::get('/admin/produk', [ProdukController::class, 'admin'])->name('admin.produk');
Route::get('/admin/mitra', [MitraController::class, 'admin'])->name('admin.mitra');

Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
Route::get('/produk/tambah', [ProdukController::class, 'tambah'])->name('produk.tambah');
Route::get('/menu', [ProdukController::class, 'menu'])->name('menu');

Route::get('/kategori', [kategoriController::class, 'index'])->name('kategori');
