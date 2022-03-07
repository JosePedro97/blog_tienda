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
Route::get('/admin/beginAdmin', [App\Http\Controllers\admin\beginAdmin::class, 'index'])->name('tologin');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/posts/{category}', [App\Http\Controllers\HomeController::class, 'postsByCategory'])->name('posts.category');
Route::get('/post/{postId}', [App\Http\Controllers\HomeController::class, 'post'])->name('post');
Route::get('/home', function(){
    return view('home');
})->middleware('auth');

Route::get('/admin/categories', [App\Http\Controllers\Admin\CategoriesController::class, 'index'])->name('admin.categories');
Route::post('/admin/categories/store', [App\Http\Controllers\Admin\CategoriesController::class, 'store'])->name('admin.categories.store');
Route::post('/admin/categories/{categoryId}/update', [App\Http\Controllers\Admin\CategoriesController::class, 'update'])->name('admin.categories.update');
Route::delete('/admin/categories/{categoryId}/delete', [App\Http\Controllers\Admin\CategoriesController::class, 'delete'])->name('admin.categories.delete');

Route::get('/admin/posts', [App\Http\Controllers\Admin\PostController::class, 'index'])->name('admin.posts');
Route::post('/admin/posts/store', [App\Http\Controllers\Admin\PostController::class, 'store'])->name('admin.posts.store');
Route::post('/admin/posts/{postId}/update', [App\Http\Controllers\Admin\PostController::class, 'update'])->name('admin.posts.update');
Route::delete('/admin/posts/{postId}/delete', [App\Http\Controllers\Admin\PostController::class, 'delete'])->name('admin.posts.delete');

Auth::routes();