<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\VendorController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\LoginController;
use Illuminate\Support\Facades\Auth;

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


Route::group(['middleware' => 'customer'], function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('/');


});




Route::group(['prefix' => 'admin', 'middleware' => 'custodian'], function () {
    
    Route::get('/dashboard', [HomeController::class, 'index'])->name('admin.dashboard');

    Route::get('/vendors', [VendorController::class, 'index'])->name('admin.vendors');
    Route::get('/vendor/create', [VendorController::class, 'create'])->name('admin.vendor.create');
    Route::post('/vendor/create', [VendorController::class, 'store'])->name('admin.vendor.create');
    Route::get('vendor/{id}/edit', [VendorController::class, 'edit'])->name('admin.vendors.edit');
    Route::post('/vendor/update/{id}', [VendorController::class, 'update'])->name('admin.vendor.update');

    Route::post('/vendor/delete', [VendorController::class, 'delete'])->name('admin.vendor.delete');
    Route::post('/vendor/multiple_delete', [VendorController::class, 'multipleDelete'])->name('admin.vendors.delete');

    Route::post('/vendor/status-change', [VendorController::class, 'changeStatus'])->name('admin.vendors.change-status');

    Route::post('vendor/name-exists', [VendorController::class, 'checkNameExists']);
});


Route::get('custodian', [LoginController::class, 'index'])->name('admin.login');

Auth::routes();


Route::get('/venders', [App\Http\Controllers\VendorController::class, 'index'])->name('venders');

