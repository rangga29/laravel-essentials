<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::view('/test', 'test')->name('test');
Route::view('/blog', 'blog')->name('blog');

Route::resource('/posts', \App\Http\Controllers\PostController::class);

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::get('users/{id?}', [\App\Http\Controllers\UserController::class, 'show'])->name('users.show');
});
