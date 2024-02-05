<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get('/posts', function () {
    return view('posts.posts');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
    Route::get('posts/create', [App\Http\Controllers\PostController::class, 'create']);
    Route::post('posts/create', [App\Http\Controllers\PostController::class, 'store']);
    Route::get('posts/{id}/edit', [App\Http\Controllers\PostController::class, 'edit']);
    Route::put('posts/{id}/edit', [App\Http\Controllers\PostController::class, 'update']);
    Route::get('posts/{id}/delete', [App\Http\Controllers\PostController::class, 'destroy']);
});

require __DIR__ . '/auth.php';
