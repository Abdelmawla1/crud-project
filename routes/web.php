<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post/trash',[PostController::class, 'showTrashedPosts'])->name('post.trash');

Route::resource('post',PostController::class);
