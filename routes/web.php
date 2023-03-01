<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenyaluranController;
use App\Http\Controllers\PenerimaanController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\OrderController;

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
Route::get('/', function (){
    return view('home');
});

Route::get('/home', function (){
    return view('home');
});

Route::get('/penyaluran', [PenyaluranController::Class, 'index']);
Route::get('/penyaluran/create', [PenyaluranController::Class, 'createView']);
Route::get('/penerimaan', [PenerimaanController::Class, 'index']);
Route::get('/laporan', [LaporanController::Class, 'index']);
Route::get('/order', [OrderController::Class, 'index']);
