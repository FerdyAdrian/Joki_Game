<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfilController;

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

Route::get('/profil', [ProfilController::class, 'index'])->middleware('auth')->name('profil');
Route::post('/profil', [ProfilController::class, 'update'])->middleware('auth')->name('profil.update');

Route::view('/usecase-jokigame', 'usecase_jokigame');

// Route resource CRUD pesanan
Route::resource('pesanan', PesananController::class)->middleware(['auth', 'role:customer']);

// Route tambahan untuk fitur khusus
Route::post('pesanan/{id}/upload-bukti', [PesananController::class, 'uploadBukti'])->name('pesanan.uploadBukti')->middleware('auth');
Route::post('pesanan/{id}/konfirmasi-selesai', [PesananController::class, 'konfirmasiSelesai'])->name('pesanan.konfirmasiSelesai')->middleware('auth');
Route::post('pesanan/{id}/konfirmasi-pembayaran', [PesananController::class, 'konfirmasiPembayaran'])->name('pesanan.konfirmasiPembayaran')->middleware('auth');
Route::get('pesanan-tersedia', [PesananController::class, 'pesananTersedia'])->name('pesanan.tersedia')->middleware(['auth', 'role:joki']);
Route::post('pesanan/{id}/terima', [PesananController::class, 'terimaPesanan'])->name('pesanan.terima')->middleware('auth');
Route::post('pesanan/{id}/tolak', [PesananController::class, 'tolakPesanan'])->name('pesanan.tolak')->middleware('auth');
Route::post('pesanan/{id}/konfirmasi-selesai-joki', [PesananController::class, 'konfirmasiSelesaiJoki'])->name('pesanan.konfirmasiSelesaiJoki')->middleware('auth');
Route::get('pesanan-joki', [PesananController::class, 'pesananJoki'])->name('pesanan.joki')->middleware(['auth', 'role:joki']);
Route::get('pesanan-admin', [PesananController::class, 'pesananAdmin'])->name('pesanan.admin')->middleware(['auth', 'role:admin']);

Route::resource('joki', UserController::class)->middleware(['auth', 'role:admin']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
