<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BestSeller;
use App\Http\Controllers\PriceMovie;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/movie/{id}', [HomeController::class, 'show'])->name('show');



Route::get('/bestSeller', [BestSeller::class, 'index'])->name('bestSeller');
Route::get('/price', [PriceMovie::class, 'index'])->name('price');


