<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

Route::get('/', HomeController::class);
Route::get('/posts', [PostController::class, 'index']);

// Route::get('/', function () {
//     return view('welcome');
// });
