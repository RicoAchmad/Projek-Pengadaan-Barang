<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\SatuanController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\BarangKeluarController;


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

Auth::routes([
    'register' => false,
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//hanya untuk role admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']],
    function() {
        Route::get('/', function() {
            return view('admin.index');
        });

        Route::get('/user-management', function() {
            return view('admin.user-management.index');
        });

        Route::get('profile', function() {
            return 'halaman profile admin';
        });

        Route::resource('supplier', SupplierController::class);

});

//hanya untuk petugas
Route::group(['prefix' => 'petugas', 'middleware' => ['auth', 'role:petugas|admin']],
    function() {
        Route::get('/', function() {
            return 'halaman petugas';
        });

        Route::get('profile', function() {
            return 'halaman profile petugas';
        });

});





//tes-fitur

Route::resource('satuan', SatuanController::class);

Route::resource('jenis', JenisController::class);

Route::resource('barang', BarangController::class);

Route::resource('barang-masuk', BarangMasukController::class);

Route::resource('barang-keluar', BarangKeluarController::class);
