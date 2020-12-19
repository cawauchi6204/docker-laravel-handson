<?php

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostsController::class, 'index']);

Route::prefix('post')->group(function () {
    Route::post('/store', [PostsController::class, 'store'])->name('post.store');
    Route::get('/{id}', [PostsController::class, 'detail'])->name('post.detail');
});

Route::post('comment/store', [CommentsController::class, 'store'])->name('comment.store');

Route::prefix('user')->group(function () {
    Route::get('/register', [UsersController::class, 'index'])->name('user.register');
    Route::post('/store', [UsersController::class, 'store'])->name('user.store');
});
