<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', HomeController::class);
Route::get('/posts', [PostsController::class, 'index']);
Route::get('/addPost', [PostsController::class, 'create']);
Route::get('/posts/{post}', [PostsController::class, 'show']);
