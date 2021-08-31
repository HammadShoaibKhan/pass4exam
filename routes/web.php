<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'admin'], function () {
    
    Route::get('/dashboard', [App\Http\Controllers\Admin\HomeController::class, 'index']);

    Route::get('/vendors', [App\Http\Controllers\Admin\VendorController::class, 'index'])->name('admin.vendors');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/venders', [App\Http\Controllers\VendorController::class, 'index'])->name('venders');

