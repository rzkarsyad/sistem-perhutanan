<?php

use App\Http\Controllers\authentications\Login;
use App\Http\Controllers\Home;
use App\Http\Controllers\pages\Penjualan;
use App\Http\Controllers\pages\Petak;
use App\Http\Controllers\pages\Produksi;
use App\Http\Controllers\pages\Realisasi;
use App\Http\Controllers\PengolahController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\PetakController;
use App\Http\Controllers\PetaniController;
use App\Http\Controllers\ProduksiController;
use App\Http\Controllers\RealisasiController;
use App\Http\Controllers\reports\DataPenjualan;
use App\Http\Controllers\reports\DataProduksi;
use App\Http\Controllers\reports\DataRealisasi;
use App\Http\Controllers\users\Petani;
use App\Http\Controllers\users\Pengolah;
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

$controller_path = 'App\Http\Controllers';

// Main Page Route
Route::get('/', [Home::class, 'index'])->name('dashboard')->middleware('auth');

// authentication
Route::controller(Login::class)->group(function () {
    Route::get('/auth/login', 'index')->name('auth-login');
    Route::post('/auth/login/process', 'process');
    Route::get('/auth/logout', 'logout')->name('logout');
});

Route::group(['middleware' => ['auth']], function () {

    // admin
    Route::group(['middleware' => ['checkUserLogin:1']], function () {
        Route::resource('admin/produksi', ProduksiController::class)->names(['index' => 'admin-produksi']);
        Route::resource('admin/realisasi', RealisasiController::class)->names(['index' => 'admin-realisasi']);
        Route::resource('admin/penjualan', PenjualanController::class)->names(['index' => 'admin-penjualan']);
    });

    // asper
    Route::group(['middleware' => ['checkUserLogin:2']], function () {
        Route::resource('asper/petani', PetaniController::class)->names(['index' => 'asper-petani']);
        Route::resource('asper/pengolah', PengolahController::class)->names(['index' => 'asper-pengolah']);
        Route::resource('asper/petak', PetakController::class)->names(['index' => 'asper-petak']);
        Route::resource('asper/produksi', ProduksiController::class)->names(['index' => 'asper-produksi']);
        Route::resource('asper/realisasi', RealisasiController::class)->names(['index' => 'asper-realisasi']);
        Route::resource('asper/penjualan', PenjualanController::class)->names(['index' => 'asper-penjualan']);
    });

    // pengolah
    Route::group(['middleware' => ['checkUserLogin:3']], function () {
        Route::resource('pengolah/realisasi', RealisasiController::class)->names(['index' => 'pengolah-realisasi']);
    });

    // petani
    Route::group(['middleware' => ['checkUserLogin:4']], function () {
        Route::resource('petani/produksi', ProduksiController::class)->names(['index' => 'petani-produksi']);
    });

    Route::get('/data', [ProduksiController::class, 'data'])->name('data');
    // Route::get('/produksi/delete/{id}', function($id){
    //     dd('Delete ' . $id);
    // })->name('delete');

});

// Route::get('/auth/register', $controller_path . '\authentications\Register@index')->name('auth-register');
// Route::get('/auth/forgot-password', $controller_path . '\authentications\ForgotPassword@index')->name('auth-reset-password');
