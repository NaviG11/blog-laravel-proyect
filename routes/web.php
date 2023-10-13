<?php

use App\Http\Controllers\DocumentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CenterController;

Route::get('/', [PostController::class, 'index'])->name('posts.index');

Route::resource('/documents', DocumentController::class);
Route::resource('/centers', CenterController::class);

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
// Route::resource('centers', CenterController::class);