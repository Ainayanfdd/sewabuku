<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListBarang;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ListBarangController122;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/list_barang', [ListBarang::class, 'tampilkan']);
Route::get('/login', [LoginController::class, 'login']);
Route::get('/listbarang122', [ListBarangController122::class, 'listbarang122']);
