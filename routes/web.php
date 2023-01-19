<?php

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
Route::get('/', [App\Http\Controllers\ViewController::class, 'index'])->name('index');
Route::get('/galeri', [App\Http\Controllers\ViewController::class, 'galeri'])->name('galeri');
Route::get('/pemesanan', [App\Http\Controllers\PemesananController::class, 'index'])->name('pemesanan');
Route::post('/pemesanan', [App\Http\Controllers\PemesananController::class, 'store'])->name('pesan');
