<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\PenerimaanController;
use App\Http\Controllers\PenyaluranController;

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
Route::get('/', [SessionController::class, 'index']);
Route::post('/login', [SessionController::class, 'login']);
Route::get('/logout', [SessionController::class, 'logout']);


Route::get('/home', [HomeController::Class, 'index']);
Route::get('/penyaluran', [PenyaluranController::Class, 'index']);
Route::get('/penyaluran/create', [PenyaluranController::Class, 'createView']);
Route::post('/tambah', [PenyaluranController::Class, 'tambah']);
Route::get('/penyaluran/update/{id}', [PenyaluranController::Class, 'updateView']);
Route::get('/penyaluran/update/ubah/{id}', [PenyaluranController::Class, 'ubah']);
Route::get('/penyaluran/delete/{id}', [PenyaluranController::Class, 'delete']);




Route::get('/penerimaan', [PenerimaanController::Class, 'index']);
Route::get('/laporan', [LaporanController::Class, 'index']);
Route::get('/order', [OrderController::Class, 'index']);
