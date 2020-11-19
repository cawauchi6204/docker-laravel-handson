<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostsController::class,'index']);

Route::post('store', [PostsController::class,'store'])->name('store');
