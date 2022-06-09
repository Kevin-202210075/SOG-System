<?php

use App\Models\Customer;
use App\Models\DataAdmin;
use App\Models\Pricelist;
use App\Models\DataBarang;
use App\Models\DataCustomer;
use App\Models\DataSupplier;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DataAdminController;

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
    return view('dashboard', [
        'title' => 'Dashboard'
    ]);
})->middleware('auth');

Route::get('/dashboard/dataadmin', [DataAdminController::class, 'index'])->middleware('auth');

// Halaman Edit Admin
// Route::get('/dashboard/dataadmin/editadmin', function () {
//     return view('dataadmin/editadmin', [
//         "title" => "Edit Data Admin"
//     ]);
// });

// Halaman Input Admin
// Route::get('/dashboard/dataadmin/inputtadmin', function () {
//     return view('dataadmin/editadmin', [
//         "title" => "Input Data Admin"
//     ]);
// });

Route::get('/dashboard/datacustomer', function () {
    return view('datacustomer', [
        "title" => "Data Customer",
        "data" => DataCustomer::all()
    ]);
})->middleware('auth');

Route::get('/dashboard/datasupplier', function () {
    return view('datasupplier', [
        "title" => "Data Supplier",
        "data" => DataSupplier::all()
    ]);
})->middleware('auth');

Route::get('/dashboard/databarang', function () {
    return view('databarang', [
        "title" => "Data Barang",
        "data" => DataBarang::all()
    ]);
})->middleware('auth');

Route::get('/dashboard/pricelist', function () {
    return view('pricelist', [
        "title" => "Pricelist"
        //"data" => Pricelist::all()
    ]);
})->middleware('auth');

Route::get('/dashboard/transaksi', function () {
    return view('transaksi', [
        "title" => "Pilih Transaksi"

    ]);
})->middleware('auth');



// Route::get('/dashboard/datacustomer/{kode_customer}', function($kode_customer){
//     return view('/datacustomer/editcustomer', [
//         "title" => "Edit Customer",
//         "data" => DataCustomer::find($kode_customer)
//     ]);
// });
