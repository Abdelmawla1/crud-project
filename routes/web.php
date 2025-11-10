<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post/trash',[PostController::class, 'showTrashedPosts'])->name('post.trash');
Route::get('/post/{id}/restore',[PostController::class, 'restorePost'])->name('post.restore');
Route::delete('/post/{id}/delete',[PostController::class, 'forceDelete'])->name('post.delete');

Route::resource('post',PostController::class);
