<?php

use App\Http\Controllers\Controller;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[Controller::class,'index'])->name('ds');
Route::get('/barang',[Controller::class,'barang'])->name('br');
Route::POST('/barang',[Controller::class,'addbarang'])->name('addBr');
Route::get('/kontrak',[Controller::class,'kontrak'])->name('kontrak');
Route::POST('/kontrak',[Controller::class,'addkontrak'])->name('addkon');
Route::get('/pembelian',[Controller::class,'pembelian'])->name('dp');
Route::POST('/pembelian',[Controller::class,'addpembelian'])->name('addP');
Route::get('/penjualan',[Controller::class,'penjualan'])->name('pj');
Route::POST('/penjualan',[Controller::class,'addpenjualan'])->name('addPj');
Route::get('/dataTransaksi',[Controller::class,'dTransaksi'])->name('dt');
Route::get('/laporanTransaksi',[Controller::class,'lTransaksi'])->name('lt');
