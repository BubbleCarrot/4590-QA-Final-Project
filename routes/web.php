<?php

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

Route::get('/', function () {return view('pages/home'); });
Route::get('/home', function () {return view('pages/home'); });
Route::get('/book-now', function () {return view('pages/booking'); });
Route::get('/service', function () {return view('pages/service'); });


// Route::get('/', [ArticleController::class, 'index']);

// // home
// Route::prefix('/home')->group(function () {
//     Route::get('', [ArticleController::class, 'index'])->name('home.index');
// });