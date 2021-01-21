<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;

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

// AJAX MORE POSTS
// PATTERN: /posts/ajax/more
// CTRL: PostController
// ACTION: more
Route::get('/posts/ajax/more', [PostController::class, 'more'])->name('posts.ajax.more');

// DETAIL D'UN POST
// PATTERN: /posts/post/slug
// CTRL: PostController
// ACTION: show
Route::get('/posts/{post}/{slug}', [PostController::class, 'show'])
      ->where('post', '[1-9][0-9]*')
      ->where('slug', '[a-z0-9][a-z0-9\-]*')
      ->name('posts.show');

// CONTACT PAGE
// PATTERN: /contact
// CTRL: ContactController
// ACTION: form
Route::get('/contact', [ContactController::class, 'form'])->name('contact.form');
