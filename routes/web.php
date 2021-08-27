<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\VendorController;
use App\Http\Controllers\Admin\HomeController;

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


Route::group(['prefix' => 'admin'], function () {
    
    Route::get('/dashboard', [HomeController::class, 'index']);

    Route::get('/vendors', [VendorController::class, 'index'])->name('admin.vendors');
    Route::get('/vendor/create', [VendorController::class, 'create'])->name('admin.vendor.create');
    Route::post('/vendor/create', [VendorController::class, 'store'])->name('admin.vendor.create');
    Route::get('vendor/{id}/edit', [VendorController::class, 'edit'])->name('admin.vendors.edit');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


