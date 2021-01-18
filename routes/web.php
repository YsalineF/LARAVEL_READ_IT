<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// ROUTRE PAR DEFAUT
// PATTERN: /
// CTRL: Posts
// ACTION: index
Route::get('/', [PostController::class, 'index'])->name('blog');

// LISTE DES POSTS
// PATTERN: /posts
// CTRL: Posts
// ACTION: index
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
