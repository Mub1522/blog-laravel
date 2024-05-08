<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

/* Home */

Route::get('/', [PostController::class, 'index']);
// Route::get('/home', HomeController::class)->name('home.invoke');

/* Posts */
Route::prefix('posts')->name('posts.')->controller(PostController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    Route::get('/show/{id}', 'show')->name('show');
    Route::get('/{id}/edit', 'edit')->name('edit');
    Route::put('/{id}', 'update')->name('update');
    Route::delete('/{id}', 'destroy')->name('destroy');
});

/* 
    Route::resource('articulos', PostController::class)
    ->parameters(['articulos' => 'post'])
    ->names('posts'); 
*/