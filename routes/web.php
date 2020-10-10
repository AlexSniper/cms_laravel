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



Auth::routes();



Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/post/{post}',[App\Http\Controllers\PostController::class, 'show'])->name('post');
//Route::get('/post', 'PostController@show')->name('post');


Route::middleware('auth')->group(function(){


    //User will have only access to admin if he will be authenticated
    Route::get('/admin',[App\Http\Controllers\AdminsController::class, 'index'])->name('admin.index');

    Route::get('/admin/posts', [App\Http\Controllers\PostController::class, 'index'])->name('post.index');
    Route::get('/admin/post/create', [App\Http\Controllers\PostController::class, 'create'])->name('post.create');
    Route::post('/admin/posts', [App\Http\Controllers\PostController::class, 'store'])->name('post.store');
    Route::get('/admin/posts/{post}/edit', [App\Http\Controllers\PostController::class, 'edit'])->name('post.edit');
    Route::delete('/admin/posts/{post}/destroy', [App\Http\Controllers\PostController::class, 'destroy'])->name('post.destroy');
    Route::patch('/admin/posts/{post}/update', [App\Http\Controllers\PostController::class, 'update'])->name('post.update');

Route::get('admin/users/{user}/profile',  [App\Http\Controllers\UserController::class, 'show'])->name('user.profile.show');
Route::put('admin/users/{user}/update',  [App\Http\Controllers\UserController::class, 'update'])->name('user.profile.update');
});


//Route::get('/admin/posts/{post}/edit', [App\Http\Controllers\PostController::class, 'edit'])->middleware('can:view, post')->name('post.edit');

Route::middleware(['role:admin','auth'])->group(function(){

    Route::get('admin/users',[App\Http\Controllers\UserController::class, 'index'])->name('users.index');
});

