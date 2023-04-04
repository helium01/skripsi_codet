<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AbsensiController;

use App\Http\Controllers\JadwalController;
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

// Route::get('/', function () {
//     return view('client.dashboard');
// });


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'home']);

route::get('/siswa',[SiswaController::class,'index'])->name('siswa');
route::get('/siswa/tambah',[SiswaController::class,'create'])->name('siswa.tambah');
route::get('/siswa/edit/{siswa}',[SiswaController::class,'edit'])->name('siswa.edit');
route::get('/siswa/delete/{siswa}',[SiswaController::class,'destroy'])->name('siswa.delete');
route::post('/siswa/post',[SiswaController::class,'store'])->name('siswa.store');
route::post('/siswa/update/{siswa}',[SiswaController::class,'update'])->name('siswa.update');
route::get('/siswa/tambah_jari/{siswa}',[SiswaController::class,'tambah_jari'])->name('siswa.tambah.jari');
route::get('/siswa/edit_jari/{siswa}',[SiswaController::class,'edit_jari']);
route::get('/siswa/selesai',[SiswaController::class,'selesai'])->name('siswa.tambah.selesai');

route::get('/jadwal',[JadwalController::class,'index'])->name('jadwal');
route::get('/jadwal/tambah',[JadwalController::class,'create'])->name('jadwal.tambah');
route::get('/jadwal/edit/{jadwal}',[JadwalController::class,'edit'])->name('jadwal.edit');
route::get('/jadwal/delete/{jadwal}',[JadwalController::class,'destroy'])->name('jadwal.delete');
route::post('/jadwal/post',[JadwalController::class,'store'])->name('jadwal.store');
route::post('/jadwal/update/{jadwal}',[JadwalController::class,'update'])->name('jadwal.update');

route::get('/absensi',[AbsensiController::class,'index'])->name('absensi');
