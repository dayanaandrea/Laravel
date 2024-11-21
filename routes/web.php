<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ComentarioController;

Route::get('/', function () {
    return view('home');
});


/*Route::controller(PostController::class)->group(function () {
    Route::get('/posts', 'index')->name('posts.index');
    Route::get('/posts/{post}', 'show')->name('posts.show');
    Route::get('/posts/create', 'create')->name('posts.create');
    Route::post('/posts/edit', 'edit')->name('posts.edit');
    Route::post('/posts/store', 'store')->name('posts.store');

    Route::delete('/posts/destroy', 'destroy')->name('posts.destroy');
});*/

//En vez de poner el codigo anterior si se pone de esta forma es mas eficaz 
Route::resources([
    'posts' => PostController::class,
]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::resources([
      'posts' => PostController::class,
    ]);
    Route::post('/comentarios', [ComentarioController::class, 'store'])
        ->name('comentarios.store');
});

Route::controller(PostController::class)->group(function () {
    Route::get('/posts', 'index')->name('posts.index');
    Route::get('/posts/{post}', 'show')->name('posts.show');
})->withoutMiddleware([Auth::class]);

