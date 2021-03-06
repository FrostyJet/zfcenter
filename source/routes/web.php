<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\OrdersController;

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
Route::get('/prices', [IndexController::class, 'renderPrices'])->name('index.prices');
Route::get('/zapchasti-akpp', [IndexController::class, 'renderZapchastiAkpp'])->name('index.zapchastiAkpp');
Route::get('/kontakty', [IndexController::class, 'renderContacts'])->name('index.contacts');
Route::get('/works', [IndexController::class, 'renderWorks'])->name('index.works');
Route::get('/works/{id}-{slug}', [IndexController::class, 'renderWorkDetails'])->name('index.works.details');

Route::post('/contacts/create', [OrdersController::class, 'store'])->name('index.contacts.store');

Route::get('/remont-akpp', [IndexController::class, 'renderRemontAkpp'])->name('index.remontAkpp');
Route::get('/remont-akpp-{brand}', [IndexController::class, 'renderRemontBrand'])->name('index.remontBrand');
Route::get('/remont-akpp/{brand}', [IndexController::class, 'renderRemontBrandDetails'])->name('index.remontBrandDetails');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes([
    'register' => false, // Registration Routes...
    'reset'    => false, // Password Reset Routes...
    'verify'   => false, // Email Verification Routes...
]);
