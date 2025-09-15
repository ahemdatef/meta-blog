<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SearchController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'recentPosts' => Post::with(['user', 'category'])->latest()->take(3)->get(),
        'posts' => Post::with(['user', 'category'])->take(10)->get(),
    ]);

});

// Auth routes
Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store']);

    Route::get('/login', [LoginController::class, 'create']);
    Route::post('/login', [LoginController::class, 'store']);
});

Route::delete('/logout', [LoginController::class, 'destroy'])->middleware('auth');


// Posts routes
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/create', [PostController::class, 'create'])->middleware('auth');
Route::get('/posts/{post}', [PostController::class, 'show']);
Route::post('/posts', [PostController::class, 'store'])->middleware('auth');

// Comments routes
Route::get('/posts/{post}/comments', [CommentController::class, 'index']);
Route::post('/posts/{post}/comments', [CommentController::class, 'store'])->middleware('auth');

// Search routes
Route::get('/search', [SearchController::class, 'search']);