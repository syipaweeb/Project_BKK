<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LokerController;
use App\Http\Controllers\DaftarController;
use App\Http\controllers\PelamarController;
use App\Http\controllers\RiwayatController;
use App\Http\Controllers\DataMitraController;
use App\Http\Controllers\LokeralumniController;
use App\Http\Controllers\MitraalumniController;
use App\Http\Controllers\ProfilAlumniController;

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


Route::resource('riwayat', RiwayatController::class);

Route::resource('profil_alumni', ProfilAlumniController::class);

route::get('mitra', [MitraalumniController::class,'index'])->name('mitra_alumni');
route::get('mitra/detail/{id}', [MitraalumniController::class,'show'])->name('mitra_alumni.detail');


route::get('loker_alumni', [LokeralumniController::class,'index'])->name('loker_alumni');
route::get('loker_alumni/detail/{id}', [LokeralumniController::class,'show'])->name('loker_alumni.detail');


// ROUTE UNTUK PROSES DAFTAR USER
// ========================================================
Route::get('/daftar', [DaftarController::class, 'index'])->name('daftar-form')->middleware('guest');
Route::post('/daftar', [DaftarController::class, 'store'])->name('daftar-store')->middleware('guest');
// ===================================================

// ROUTE UNTUK PROSES DAFTAR USER
// ========================================================
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login-auth')->middleware('guest');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('guest');
// ===================================================
// store, edit, create, destroy, update, index


Route::prefix('admin')
->middleware(['auth'])
->group(function () {
    Route::resource('data_mitra', DataMitraController::class);

    Route::resource('loker', LokerController::class);

    Route::resource('pelamar', PelamarController::class);



});
