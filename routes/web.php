<?php

use App\Http\Controllers\Admin\AbsensiController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GajiController;
use App\Http\Controllers\Admin\KaryawanController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::group(['middleware' => ['role:karyawan']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Route::group(['middleware' => ['role:super admin|hr|keuangan|direktur']], function () {
    Route::get('/admin/dashboard', DashboardController::class)->name('admin.dashboard');
    Route::get('/admin/karyawan', [KaryawanController::class, 'index'])->name('admin.karyawan')->can('show karyawan');
    Route::get('/admin/absensi', [AbsensiController::class, 'index'])->name('admin.absensi');
    Route::get('/admin/gaji', [GajiController::class, 'index'])->name('admin.gaji');
});
