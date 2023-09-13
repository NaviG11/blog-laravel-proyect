<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Admin\HomeController;

// Route::get('', function () {
//     return 'Bienvenido administrador';
// })->name('admin');
Route::get('', [HomeController::class, 'index']);