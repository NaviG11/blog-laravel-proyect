<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\LawController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;

// Route::get('', function () {
//     return 'Bienvenido administrador';
// })->name('admin');
Route::get('', [HomeController::class, 'index'])->middleware('can:admin.home')->name('admin.home');

Route::resource('users', UserController::class)
    ->only(['index', 'edit', 'update'])
    ->names('admin.users');

Route::resource('categories', CategoryController::class)
    ->except('show')
    ->names('admin.categories');

Route::resource('articles', ArticleController::class)
    ->except('show')
    ->names('admin.articles');

Route::resource('laws', LawController::class)
    ->except('show')
    ->names('admin.laws');

Route::resource('tags', TagController::class)
    ->except('show')
    ->names('admin.tags');

Route::resource('posts', PostController::class)
    ->except('show')
    ->names('admin.posts');

Route::resource('roles', RoleController::class)
    // ->except('show')
    ->names('admin.roles');