<?php

use App\Http\Controllers\Landing_Page\BerandaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\Dashboard_Admin\DashboardAdminController;
use App\Http\Controllers\Dashboard_Admin\DataMitraController;
use App\Http\Controllers\Dashboard_Admin\LokerController;
use App\Http\Controllers\Dashboard_Admin\ManajemenSiswaController;
use App\Http\Controllers\Dashboard_Admin\PelamarController;
use App\Http\Controllers\Dashboard_Admin\PengumumanController;
use App\Http\Controllers\Dashboard_Admin\ProfilAdminController;
use App\Http\Controllers\Dashboard_Admin\ProfilBKKAdminController;
use App\Http\Controllers\Dashboard_Alumni\DashboardAlumniController;
use App\Http\Controllers\Dashboard_Alumni\GantiPasswordController;
use App\Http\Controllers\Dashboard_Alumni\ProfilAlumniController;
use App\Http\Controllers\Dashboard_Alumni\RiwayatController;
use App\Http\Controllers\Landing_Page\LokeralumniController;
use App\Http\Controllers\Landing_Page\MitraalumniController;
use App\Http\Controllers\Landing_Page\PengumumanAlumniController;
use App\Http\Controllers\Landing_Page\ProfilBKKController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\ResumeController;
use App\Http\Dashboard_Admin\Controllers\DashboardAdminController as ControllersDashboardAdminController;

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


// Rute untuk proses login pengguna ====================================================================================
Route::get('/login', [LoginController::class, 'index'])->name('login-form')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login-auth');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');
// =====================================================================================================================


// Halaman Daftar ======================================================================================================
Route::get('/daftar', [DaftarController::class, 'index'])->name('daftar-form')->middleware('guest');
Route::post('/daftar', [DaftarController::class, 'store'])->name('daftar-store')->middleware('guest');
// =====================================================================================================================


// Halaman Landing Page=================================================================================================
// Beranda
route::get('/', [BerandaController::class, 'index'])->Name('beranda');
route::get('beranda', [BerandaController::class, 'index'])->Name('beranda2');
// ---------------------------------------------------------------------------------------------------------------------
// Profil BKK Landing Page
route::get('profil_bkk_sekolah', [ProfilBKKController::class, 'index'])->Name('profil_bkk_sekolah');
// ---------------------------------------------------------------------------------------------------------------------
// Loker Landing Page
route::get('loker_alumni', [LokeralumniController::class, 'index'])->name('loker_alumni');
route::get('loker_alumni/detail/{id}', [LokeralumniController::class, 'show'])->name('loker_alumni.detail');
// ---------------------------------------------------------------------------------------------------------------------
// Mitra Landing Page
route::get('mitra', [MitraalumniController::class, 'index'])->name('mitra_alumni');
route::get('mitra/detail/{id}', [MitraalumniController::class, 'show'])->name('mitra_alumni.detail');
// ---------------------------------------------------------------------------------------------------------------------
// Loker Landing Page
route::get('loker_alumni', [LokeralumniController::class, 'index'])->name('loker_alumni');
route::get('loker_alumni/detail/{id}', [LokeralumniController::class, 'show'])->name('loker_alumni.detail');
// ---------------------------------------------------------------------------------------------------------------------
// Pengumuman Landing Page
route::get('pengumuman', [PengumumanAlumniController::class, 'index'])->Name('pengumuman');
route::get('pengumuman/detail/{id}', [PengumumanAlumniController::class, 'show'])->name('pengumuman.detail');
// ---------------------------------------------------------------------------------------------------------------------

// ======================================================================================================================


// Dashboard Admin =====================================================================================================
Route::prefix('admin')->middleware(['auth', 'role:admin'])->group(function () {
    Route::get('dashboard_admin', [DashboardAdminController::class, 'index'])->name('dashboard_admin');
    Route::get('profil_admin', [ProfilAdminController::class, 'index'])->name('profil_admin.index');
    Route::post('profil_admin', [ProfilAdminController::class, 'update'])->name('profil_admin.update');
    Route::resource('profil_bkk', ProfilBKKAdminController::class);
    Route::resource('manajemen_siswa', ManajemenSiswaController::class);
    Route::resource('data_mitra', DataMitraController::class);
    Route::resource('loker', LokerController::class);
    Route::resource('pengumuman_admin', PengumumanController::class);
    // Route::get('pelamar_admin', PelamarController::class);
    Route::get('/loker/{id}/pelamar', [PelamarController::class])->name('loker.pelamar');
    Route::get('/pelamar/{id}', [PelamarController::class, 'show'])->name('pelamar.index');

});
// ======================================================================================================================


// Dashboard Alumni =====================================================================================================
Route::prefix('alumni')->middleware(['auth', 'role:alumni'])->group(function () {
    Route::get('dashboard_alumni', [DashboardAlumniController::class, 'index'],)->name('alumni_dasboard');
    Route::get('profil_alumni', [ProfilAlumniController::class, 'index'])->name('profil_alumni.index');
    Route::post('profil_alumni', [ProfilAlumniController::class, 'update'])->name('profil_alumni.update');
    Route::resource('riwayat', RiwayatController::class);
    route::get('riwayat/{id}', [RiwayatController::class, 'show'])->name('riwayat_lamaran');
    Route::resource('resume', ResumeController::class);
    Route::get('ganti_password', [GantiPasswordController::class, 'index'])->name('ganti_password');
    Route::post('/ganti-password', [GantiPasswordController::class, 'ganti_password'])->name('user.change_password');

    Route::post('pelamar_alumni', [PelamarController::class, 'store'])->name('pelamar_alumni');
    Route::post('/pelamar/kirim', [PelamarController::class])->name('pelamar.kirim');
});
// ======================================================================================================================
