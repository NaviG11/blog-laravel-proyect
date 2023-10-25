<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\DocumentController;
use App\Http\Controllers\Admin\CenterController;
use App\Http\Controllers\Admin\EventoController;
use App\Http\Controllers\Admin\FormController;

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


Route::resource('tags', TagController::class)
    ->except('show')
    ->names('admin.tags');

Route::resource('posts', PostController::class)
    ->except('show')
    ->names('admin.posts');

Route::resource('roles', RoleController::class)
    // ->except('show')
    ->names('admin.roles');

Route::resource('articles', ArticleController::class)
    ->except('show')
    ->names('admin.articles');

Route::resource('evento', EventoController::class)
    ->names('admin.evento');

// Route::resource('documents', DocumentController::class)
//     // ->only(['index', 'edit', 'update'])
//     ->names('admin.documents');
Route::resource('documents', DocumentController::class)
    ->names('admin.documents');

Route::resource('centers', CenterController::class)
    ->names('admin.centers');

// Route::resource('centers', CenterController::class)
// ->names('admin.centers');

