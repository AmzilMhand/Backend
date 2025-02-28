<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/posts', [PostController::class , 'show'])->name('posts');
Route::get('/posts/create', [PostController::class , 'create'])->name('post.create');
Route::post('/posts', [PostController::class , 'store'])->name('post.store');
Route::get('/posts/edit/{id}', [PostController::class, 'edit'])->name('post.edit');
Route::post('/posts/{id}', [PostController::class, 'update'])->name('post.update');
Route::get('/posts/{id}', [PostController::class, 'destroy'])->name('post.delete');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
