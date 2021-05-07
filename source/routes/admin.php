<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminPostsController; 
use App\Http\Controllers\AdminMediaController; 

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
Route::get('/posts', [AdminPostsController::class, 'index'])->name('admin.posts.index');
Route::get('/posts/create', [AdminPostsController::class, 'create'])->name('admin.posts.create');
Route::post('/posts/create', [AdminPostsController::class, 'store'])->name('admin.posts.store');
Route::get('/posts/edit/{id}', [AdminPostsController::class, 'edit'])->name('admin.posts.edit');
Route::post('/posts/edit/{id}', [AdminPostsController::class, 'update'])->name('admin.posts.update');
Route::get('/posts/delete/{id}', [AdminPostsController::class, 'delete'])->name('admin.posts.delete');
# --------------------------------------------------------------------------

# Media
# --------------------------------------------------------------------------
Route::post('/media', [AdminMediaController::class, 'uploadStart'])->name('admin.media.uploadStart');
Route::post('/media/patch/{id}', [AdminMediaController::class, 'uploadChunk'])->name('admin.media.uploadChunk');

Route::get('/media/delete/{id}', [AdminMediaController::class, 'delete'])->name('admin.media.delete');
# --------------------------------------------------------------------------