<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;

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

Route::get('/', [IndexController::class, 'renderHome']);
Route::get('/about', [IndexController::class, 'renderAbout'])->name('index.about');
Route::get('/remont-akpp', [IndexController::class, 'renderPrices'])->name('index.remontAkpp');
Route::get('/prices', [IndexController::class, 'renderPrices'])->name('index.prices');