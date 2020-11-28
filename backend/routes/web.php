<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\CommentsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostsController::class,'index']);

Route::post('post/store', [PostsController::class,'store'])->name('post.store');

Route::get('post/{id}',[PostsController::class,'detail'])->name('post.detail');

Route::post('comment/store',[CommentsController::class,'store'])->name('comment.store');
