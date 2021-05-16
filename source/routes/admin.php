<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminPostsController;
use App\Http\Controllers\AdminMediaController;
use App\Http\Controllers\AdminOrdersController;
use App\Http\Controllers\AdminCarsController;

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

# Posts
# --------------------------------------------------------------------------
Route::get('/', [AdminPostsController::class, 'index']);
Route::get('/posts', [AdminPostsController::class, 'index'])->name('admin.posts.index');
Route::get('/posts/create', [AdminPostsController::class, 'create'])->name('admin.posts.create');
Route::post('/posts/create', [AdminPostsController::class, 'store'])->name('admin.posts.store');
Route::get('/posts/edit/{id}', [AdminPostsController::class, 'edit'])->name('admin.posts.edit');
Route::post('/posts/edit/{id}', [AdminPostsController::class, 'update'])->name('admin.posts.update');
Route::get('/posts/delete/{id}', [AdminPostsController::class, 'delete'])->name('admin.posts.delete');
# --------------------------------------------------------------------------

# Cars
# --------------------------------------------------------------------------
Route::get('/cars', [AdminCarsController::class, 'index'])->name('admin.cars.index');
Route::get('/cars/edit/{id}', [AdminCarsController::class, 'edit'])->name('admin.cars.edit');
Route::post('/cars/edit/{id}', [AdminCarsController::class, 'update'])->name('admin.cars.update');
# --------------------------------------------------------------------------

# Orders
# --------------------------------------------------------------------------
Route::get('/orders', [AdminOrdersController::class, 'index'])->name('admin.orders.index');
Route::get('/orders/delete/{id}', [AdminOrdersController::class, 'delete'])->name('admin.orders.delete');
# --------------------------------------------------------------------------

# Media
# --------------------------------------------------------------------------
Route::post('/media/upload', [AdminMediaController::class, 'upload'])->name('admin.media.upload');
Route::get('/media/delete/{id}', [AdminMediaController::class, 'delete'])->name('admin.media.delete');
# --------------------------------------------------------------------------


