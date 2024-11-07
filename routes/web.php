<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::get('/', function () {
    return view('home');
});

Route::controller(PostController::class)->group(function () {
    Route::get('/posts', 'index')->name('posts.index');
    Route::get('/posts/{post}', 'show')->name('posts.show');
    Route::get('/posts/create', 'create')->name('posts.create');
    Route::post('/posts/edit', 'edit')->name('posts.edit');
    Route::post('/posts/store', 'store')->name('posts.store');

    Route::delete('/posts/destroy', 'destroy')->name('posts.destroy');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
