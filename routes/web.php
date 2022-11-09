<?php

// use App\Http\Controllers\AdminController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\TableController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ReservationController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


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
Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth'])->name('dashboard');

    Route::middleware(['auth','admin'])->name('admin.')->prefix('admin')->group(function(){
        Route::get('/',[AdminController::class,'index'])->name('index');
        Route::resource('/menus',MenuController::class);
        Route::resource('/categories',CategoryController::class);
        Route::resource('/reservations',ReservationController::class);
        Route::resource('/tables',TableController::class);
    });

});

require __DIR__.'/auth.php';
