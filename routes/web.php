<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post/trash',[PostController::class, 'showTrashedPosts'])->name('post.trash');
Route::get('/post/{id}/restore',[PostController::class, 'restorePost'])->name('post.restore');

Route::resource('post',PostController::class);
