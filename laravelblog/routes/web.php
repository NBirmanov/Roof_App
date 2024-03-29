<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\NewPostController;
use App\Http\Controllers\ImageController;


Route::resource('newPosts', NewPostController::class);
Route::get('newPosts', [NewPostController::class, 'index'])->name('newPosts');
Route::get('/', function () {
    return view('layout.home');
});

Route::get('news', function () {
    return view('layout.news');
});

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('/login', [LoginController::class, 'create'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'store'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'destroy'])->middleware('auth')->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::resource('posts', PostController::class);
    Route::get('/posts.create', function (){
        return view('posts.create');
    })->name('posts.create');
});
