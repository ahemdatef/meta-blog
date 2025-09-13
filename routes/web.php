<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'recentPosts' => Post::with(['user', 'category'])->latest()->take(3)->get(),
        'posts' => Post::with(['user', 'category'])->take(10)->get(),
    ]);
});

// Route::get('/', [PostController::class, 'index']);

Route::get('/posts', [PostController::class, 'index']);
Route::get('/create', [PostController::class, 'create']);
Route::post('/posts', [PostController::class, 'store']);
Route::get('/posts/{post}', [PostController::class, 'show']);