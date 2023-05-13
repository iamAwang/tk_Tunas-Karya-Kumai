<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeveloperController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SekolahController;
use App\Http\Controllers\SertifikatController;

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

Route::get('/', function () {return view('welcome');});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/developer',[DeveloperController::class,'index'])->name('Developer');
Route::get('/developer/create',[DeveloperController::class,'create']);
Route::post('/developer/store',[DeveloperController::class,'store']);

Route::get('/sekolah',[SekolahController::class,'index'])->name('indexSekolah');

Route::get('/pegawai',[PegawaiController::class,'index'])->name('indexPegawai');
Route::get('/create-pegawai',[PegawaiController::class, 'create'])->name('createPegawai');
Route::post('/store-pegawai',[PegawaiController::class, 'store'])->name('storePegawai');
Route::get('/edit-pegawai/{id}',[PegawaiController::class, 'edit'])->name('editPegawai');
Route::post('/update-pegawai/{id}',[PegawaiController::class, 'update'])->name('updatePegawai');
Route::post('/delete-pegawai/{id}',[PegawaiController::class, 'delete'])->name('deletePegawai');

Route::get('/siswa',[SiswaController::class,'index'])->name('indexSiswa');
Route::get('/create-siswa',[SiswaController::class, 'create'])->name('createSiswa');
Route::post('/store-siswa',[SiswaController::class, 'store'])->name('storeSiswa');
Route::get('/edit-siswa/{id}',[SiswaController::class, 'edit'])->name('editSiswa');
Route::post('/update-siswa/{id}',[SiswaController::class, 'update'])->name('updateSiswa');
Route::post('/delete-siswa/{id}',[SiswaController::class, 'delete'])->name('deleteSiswa');

Route::get('/cerate-sertifikat',[SertifikatController::class, 'create'])->name('createSertifikat');
Route::post('/store-sertifikat',[SertifikatController::class, 'store'])->name('storeSertifikat');
