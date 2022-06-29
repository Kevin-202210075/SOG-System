<?php

use App\Http\Controllers\DashboardDBController;
use App\Models\Customer;
use App\Models\DataAdmin;
use App\Models\Pricelist;
use App\Models\DataBarang;
use App\Models\DataCustomer;
use App\Models\DataSupplier;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DataAdminController;
use App\Http\Controllers\DashboardDCController;
use App\Http\Controllers\DashboardDSController;
use App\Http\Controllers\DashboardPricelistController;
use App\Http\Controllers\DashboardUserController;

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

Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', function () {
    return view('dashboard.index', [
        'title' => 'Dashboard'
    ]);
})->middleware('auth');

Route::resource('/dashboard/dataadmin', DashboardUserController::class)->middleware('auth');
Route::resource('/dashboard/datasupplier', DashboardDSController::class)->middleware('auth');
Route::resource('/dashboard/databarang', DashboardDBController::class)->middleware('auth');
Route::resource('/dashboard/pricelist', DashboardPricelistController::class)->middleware('auth');

Route::get('/dashboard/transaksi', function () {
    return view('transaksi.index', [
        "title" => "Pilih Transaksi"

    ]);
})->middleware('auth');

Route::get('/dashboard/laporan', function () {
    return view('laporan.index', [
        "title" => "Pilih Laporan"

    ]);
})->middleware('auth');


Route::resource('/dashboard/datacustomer', DashboardDCController::class)->shallow()->middleware('auth');
