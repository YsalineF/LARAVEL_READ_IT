<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// ROUTRE PAR DEFAUT
// PATTERN: /
// CTRL: PostController
// ACTION: index
Route::get('/', [PostController::class, 'index'])->name('blog');

// LISTE DES POSTS
// PATTERN: /posts
// CTRL: PostController
// ACTION: index
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

// DETAIL D'UN POST
// PATTERN: /posts/post/slug
// CTRL: PostController
// ACTION: show
Route::get('/posts/{post}/{slug}', [PostController::class, 'show'])
      ->where('post', '[1-9][0-9]*')
      ->where('slug', '[a-z0-9][a-z0-9\-]*')
      ->name('posts.show');
