<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\EmployeeControllerController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\LoaiSanPhamController;
use App\Http\Controllers\Menu;
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\TestCrl;
use App\Models\Admin;
use App\Models\EmployeeController;
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
Route::get('/menu', [Menu::class, 'index']);
Route::get('/about', [TestCrl::class, 'index']);
Route::get('/', [HomePageController::class, 'index']);
Route::post('/admin-lte/login', [AdminController::class, 'actionLogin']);
Route::get('/admin-lte/login', [AdminController::class, 'viewLogin']);
Route::group(['prefix' => '/admin-lte','middleware' => 'admin'], function() {
    Route::group(['prefix' => '/loai-san-pham'], function() {
        Route::get('/index', [LoaiSanPhamController::class, 'index']);
        Route::get('/data', [LoaiSanPhamController::class, 'getData']);

        Route::post('/create', [LoaiSanPhamController::class, 'create']);
        Route::post('/delete', [LoaiSanPhamController::class, 'delete']);
        Route::post('/update', [LoaiSanPhamController::class, 'update']);
        Route::post('/edit', [LoaiSanPhamController::class, 'edit']);
    });
    Route::group(['prefix' => '/san-pham'], function() {
        Route::get('/index', [SanPhamController::class, 'index']);
        Route::get('/data', [SanPhamController::class, 'getData']);

        Route::post('/create', [SanPhamController::class, 'create']);
        Route::post('/delete', [SanPhamController::class, 'delete']);
        Route::post('/status', [SanPhamController::class, 'status']);

        Route::post('/update', [SanPhamController::class, 'update']);

    });
    Route::group(['prefix' => '/tai-khoan'], function() {
        Route::get('/index', [AdminController::class, 'index']);
        Route::get('/data', [AdminController::class, 'data']);

        Route::post('/create', [AdminController::class, 'create']);
        Route::post('/change-status', [AdminController::class, 'status']);
        Route::post('/update', [AdminController::class, 'update']);

    });

    Route::group(['prefix' => '/employee'], function() {
        Route::get('/index', [EmployeeControllerController::class, 'index']);
        Route::get('/data', [EmployeeControllerController::class, 'getData']);
        Route::post('/create', [EmployeeControllerController::class, 'create']);
        Route::post('/delete', [EmployeeControllerController::class, 'delete']);

    });
});
