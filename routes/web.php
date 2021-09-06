<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\VendorController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\CertificationController;
use App\Http\Controllers\Admin\ExamController;
use App\Http\Controllers\Exam_Controller;
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

    /** Global / Front-end ROUTES */

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('vendor/{slug?}', [App\Http\Controllers\VendorController::class, 'index'])->name('vendor');
Route::get('{slug?}/{exam?}', [Exam_Controller::class, 'index'])->name('exam');

Route::group(['middleware' => 'customer'], function () {
    // 
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
        Route::post('multiple-delete', [VendorController::class, 'multipleDelete'])->name('admin.vendors.delete');
        Route::post('status-change', [VendorController::class, 'changeStatus'])->name('admin.vendors.change-status');
        Route::post('name-exists', [VendorController::class, 'checkNameExists']);
        Route::post('get-certifications', [VendorController::class, 'vendorCertifications'])->name('admin.vendor.certifications');
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
        Route::post('multiple-delete', [CertificationController::class, 'multipleDelete'])->name('admin.certifications.delete');
        Route::post('status-change', [CertificationController::class, 'changeStatus'])->name('admin.certifications.change-status');
    });


    /** ADMIN EXAMS ROUTES */
    Route::get('exams', [ExamController::class, 'index'])->name('admin.exams');
    Route::prefix('exam')->group(function () {
        Route::get('create', [ExamController::class, 'create'])->name('admin.exam.create');
        Route::post('create', [ExamController::class, 'store'])->name('admin.exam.create');
        Route::get('{id}/edit', [ExamController::class, 'edit'])->name('admin.exam.edit');
        Route::post('update/{id}', [ExamController::class,'update'])->name('admin.exam.update');
        Route::post('name-exists', [ExamController::class, 'checkNameExists'])->name('admin.exam.name-exists');
        Route::post('code-exists', [ExamController::class, 'checkExamCodeExists'])->name('admin.exam.code-exists');
        Route::post('mutiple-delete', [ExamController::class, 'multipleDelete'])->name('admin.exams.delete');
        Route::post('delete', [ExamController::class, 'delete'])->name('admin.exam.delete');
        Route::post('change-status', [ExamController::class, 'changeStatus'])->name('admin.exam.change-status');
    });


});


Route::get('custodian', [LoginController::class, 'index'])->name('admin.login');

Auth::routes();



