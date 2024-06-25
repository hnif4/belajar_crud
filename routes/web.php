<?php

use App\Http\Controllers\DokterController;
use App\Http\Controllers\JagaController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\SpesialisController;
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

Route::get('/', function () {
    return view('Layout');
});



Route::get('tb_dokter',[DokterController::class,'index']);
Route::post('tb_dokter/tambah', [DokterController::class,'tambah']);
Route::post('tb_dokter/hapus',[DokterController::class,'hapus']);
Route::post('tb_dokter/edit',[DokterController::class,'edit']);



Route::get('tb_jaga',[JagaController::class,'index']);
Route::post('tb_jaga/tambah', [JagaController::class,'tambah']);
Route::post('tb_jaga/hapus',[JagaController::class,'hapus']);
Route::post('tb_jaga/edit',[JagaController::class,'update']);


Route::get('tb_pasien',[PasienController::class,'index']);
Route::post('tb_pasien/tambah', [PasienController::class,'tambah']);
Route::post('tb_pasien/hapus',[PasienController::class,'hapus']);
Route::post('tb_pasien/edit',[PasienController::class,'edit']);


Route::get('tb_spesialis', [SpesialisController::class, 'index']);
Route::post('tb_spesialis/tambah', [SpesialisController::class, 'tambah']);
Route::post('tb_spesialis/edit', [SpesialisController::class, 'update']);
Route::post('tb_spesialis/hapus', [SpesialisController::class, 'hapus']);


