<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PemasokController;


Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/', [HomeController::class, 'index']);
Route::get('profile', [HomeController::class, 'profile']);
Route::get('contact', [HomeController::class, 'contact']);
Route::get('faq', [HomeController::class, 'faq']);
Route::resource('produk', ProdukController::class);
Route::resource('barang', BarangController::class);
Route::resource('pemasok', PemasokController::class);