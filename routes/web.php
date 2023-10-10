<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\Landing\HomeController;
use App\http\Controllers\Dashboard\DashboardController;
use App\http\Controllers\Dashboard\KategoriController;
use App\http\Controllers\Dashboard\JenisController;
use App\http\Controllers\LoginController;
use App\http\Controllers\RegisterController;



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

Route::get('/home', [HomeController::class, 'index'])->name('home.index');
Route::post('/home', [HomeController::class, 'store'])->name('home.store');
Route::get('/kategori', [kategoriController::class, 'index'])->name('kategori.index');


Route::group(['middleware' => ['auth']], function () {
    Route::get('/kategori', [KategoriController::class, 'viewKategori'])->name('Kategori');
    Route::get('/form-kategori', [KategoriController::class, 'formKategori']);
    Route::post('/insert-kategori', [KategoriController::class, 'store']);
    Route::delete('/delete-kategori/{id}', [KategoriController::class, 'destroy'])->name('kategori.hapus');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('');
    Route::get('/pengelolaan', [JenisController::class, 'index'])->name('pengelolaan.index');
    Route::get('/tambahsampah', [JenisController::class, 'tambah'])->name('tambahsampah.indes');
    Route::post('/tambahsampah', [JenisController::class, 'store'])->name('jenis.store');
    Route::delete('/hapus/{id}', [JenisController::class, 'destroy'])->name('jenis.hapus');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/action-login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->name('');



