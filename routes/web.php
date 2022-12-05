<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesController;
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


Route::prefix('')->controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home.home');
    Route::get('/home', 'index')->name('home.index');
});

Route::prefix('/book-now')->controller(BookController::class)->group(function () {
    Route::get('', 'index')->name('book.index');
    Route::post('', 'send')->name('book.send');
});

Route::prefix('/service')->controller(ServicesController::class)->group(function () {
    Route::get('', 'index')->name('services.index');

    Route::get('/{service}', 'service', )->name('service');
});