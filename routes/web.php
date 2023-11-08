<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\DocumentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CenterController;
use App\Http\Controllers\EventoController;

use App\Http\Controllers\Admin\FormController;

// °°°°°°°°°°°°°°°°°°°°°°° VIDEO °°°°°°°°°°°°°°°°°°°°°°°°
use App\Http\Controllers\VideoController;

// °°°°°°°°°°°°°°°°°°°°°°° VIDEO °°°°°°°°°°°°°°°°°°°°°°°°

Route::get('/', [PostController::class, 'index'])->name('posts.index');

Route::resource('/documents', DocumentController::class);
Route::resource('/articles', ArticleController::class);
Route::resource('/form', FormController::class);
Route::resource('/centers', CenterController::class);
Route::resource('/evento', EventoController::class);
Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');

Route::get('category/{category}', [PostController::class, 'category'])->name('posts.category');

Route::get('tag/{tag}', [PostController::class, 'tag'])->name('posts.tag');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/mi-ruta/create', [FormController::class, 'create']);

Route::post('/mi-ruta/create', [FormController::class, 'store']);


Route::match(['get', 'post'], '/ruta/generar-pdf', [FormController::class, 'generarPDF']);

Route::post('/guardar-ubicacion',[FormController::class, 'store']);

// Route::resource('centers', CenterController::class);

// °°°°°°°°°°°°°°°°°°°°°°° VIDEO °°°°°°°°°°°°°°°°°°°°°°°°
Route::resource('video',VideoController::class);


// °°°°°°°°°°°°°°°°°°°°°°° VIDEO °°°°°°°°°°°°°°°°°°°°°°°°