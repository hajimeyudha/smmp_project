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
Route::get('/penerimaan/create', [PenerimaanController::Class, 'createView']);
Route::post('/tambah', [PenerimaanController::Class, 'tambah']);
Route::get('/penerimaan/update/{id}', [PenerimaanController::Class, 'updateView']);
Route::get('/penerimaan/update/ubah/{id}', [PenerimaanController::Class, 'ubah']);
Route::get('/penerimaan/delete/{id}', [PenerimaanController::Class, 'delete']);

Route::get('/laporan', [LaporanController::Class, 'index']);
Route::get('/laporan/create', [LaporanController::Class, 'createView']);
Route::post('/tambah', [LaporanController::Class, 'tambah']);
Route::get('/laporan/update/{id}', [LaporanController::Class, 'updateView']);
Route::get('/laporan/update/ubah/{id}', [LaporanController::Class, 'ubah']);
Route::get('/laporan/delete/{id}', [LaporanController::Class, 'delete']);

Route::get('/order', [OrderController::Class, 'index']);
Route::get('/order/create', [OrderController::Class, 'createView']);
Route::post('/tambah', [OrderController::Class, 'tambah']);
Route::get('/order/update/{id}', [OrderController::Class, 'updateView']);
Route::get('/order/update/ubah/{id}', [OrderController::Class, 'ubah']);
Route::get('/order/delete/{id}', [OrderController::Class, 'delete']);

