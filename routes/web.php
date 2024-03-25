<?php

use App\Http\Controllers\DataMitraController;
use App\Http\Controllers\LokerController;
use App\Http\controllers\PelamarController;
use App\Http\controllers\RiwayatController;
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
    return view('welcome');
});

Route::resource('data_mitra', DataMitraController::class);

Route::resource('loker', LokerController::class);

Route::resource('pelamar', PelamarController::class);

Route::resource('riwayat', RiwayatController::class);
// store, edit, create, destroy, update, index
