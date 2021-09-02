<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\VendorController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\CertificationController;
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
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/vendors/{title}', [App\Http\Controllers\VendorController::class, 'index'])->name('vendors');


});




Route::group(['prefix' => 'admin', 'middleware' => 'custodian'], function () {
    
    Route::get('/dashboard', [HomeController::class, 'index'])->name('admin.dashboard');


    /** ADMIN VENDORS ROUTES */
    
    Route::get('/vendors', [VendorController::class, 'index'])->name('admin.vendors');
    Route::prefix('vendor')->group(function () {
        Route::get('create', [VendorController::class, 'create'])->name('admin.vendor.create');
        Route::post('create', [VendorController::class, 'store'])->name('admin.vendor.create');
        Route::get('{id}/edit', [VendorController::class, 'edit'])->name('admin.vendors.edit');
        Route::post('update/{id}', [VendorController::class, 'update'])->name('admin.vendor.update');
    
        Route::post('delete', [VendorController::class, 'delete'])->name('admin.vendor.delete');
        Route::post('multiple_delete', [VendorController::class, 'multipleDelete'])->name('admin.vendors.delete');
    
        Route::post('status-change', [VendorController::class, 'changeStatus'])->name('admin.vendors.change-status');
    
        Route::post('name-exists', [VendorController::class, 'checkNameExists']);
    });


    /** ADMIN CERTIFICATIONS ROUTES */

    Route::get('/certifications', [CertificationController::class, 'index'])->name('admin.certifications');
    Route::prefix('certification')->group(function () {
        Route::get('create', [CertificationController::class, 'create'])->name('admin.certification.create');
        Route::post('create', [CertificationController::class, 'store'])->name('admin.certification.create');
        Route::post('name-exists', [CertificationController::class, 'checkNameExists'])->name('admin.certification.name-exists');
        Route::get('{id}/edit', [CertificationController::class, 'edit'])->name('admin.certifications.edit');
        Route::post('update/{id}', [CertificationController::class, 'update'])->name('admin.certification.update');
        Route::post('delete', [CertificationController::class, 'delete'])->name('admin.certification.delete');
        Route::post('multiple_delete', [CertificationController::class, 'multipleDelete'])->name('admin.certifications.delete');
        Route::post('status-change', [CertificationController::class, 'changeStatus'])->name('admin.certifications.change-status');
    });


});


Route::get('custodian', [LoginController::class, 'index'])->name('admin.login');

Auth::routes();



