<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);
Route::get('/home', HomeController::class)->name('home.invoke');

Route::get('/posts', [PostsController::class, 'index'])->name('posts.index');

Route::get('/posts/create', [PostsController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostsController::class, 'store'])->name('posts.store');

Route::get('/posts/{id}', [PostsController::class, 'show'])->name('posts.show');

Route::get('/posts/{id}/edit', [PostsController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{id}', [PostsController::class, 'update'])->name('posts.update');

Route::delete('/posts/{id}', [PostsController::class, 'destroy'])->name('posts.destroy');