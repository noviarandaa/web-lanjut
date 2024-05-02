<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [ProdukController::class, 'index'])->name('home');
Route::get('/produk', [ProdukController::class, 'table'])->name('produk');
Route::get('/tambah', [ProdukController::class, 'create'])->name('tambah');