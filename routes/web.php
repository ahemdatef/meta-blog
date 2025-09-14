<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'recentPosts' => Post::with(['user', 'category'])->latest()->take(3)->get(),
        'posts' => Post::with(['user', 'category'])->take(10)->get(),
    ]);

});

// Auth routes
Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'create']);
Route::post('/login', [LoginController::class, 'store']);

Route::delete('/logout', [LoginController::class, 'destroy']);


// Posts routes
Route::get('/posts', [PostController::class, 'index']);
Route::get('/create', [PostController::class, 'create']);
Route::post('/posts', [PostController::class, 'store']);
Route::get('/posts/{post}', [PostController::class, 'show']);
