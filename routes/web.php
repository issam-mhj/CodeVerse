<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\ConnectionController;
use App\Http\Controllers\TweetController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/home', [UserController::class, "showHome"])->name("home");
Route::get('/profile', [UserController::class, "showProfile"])->name("profile");
Route::get('/profile/update', [UserController::class, "showUpdateProfile"])->name("updateprofile");
Route::post('/profile/update', [UserController::class, "updateProfile"])->name("updatedprofile");
Route::get('/posts', [PostController::class, "index"])->name("myposts");
Route::post('/posts', [PostController::class, "store"])->name("posts.store");
Route::delete('/posts/delete/{post}', [PostController::class, "destroy"])->name("posts.delete");
Route::get('/posts/edit/{post}', [PostController::class, "edit"])->name("posts.edit");
Route::put('/posts/update/{post}', [PostController::class, "update"])->name("posts.update");
// Route::post('/addcomment/{post}', [CommentController::class, "store"])->name("comment.store");
Route::get('/connections', [ConnectionController::class, "index"])->name("connection");
Route::get('/tweet', [TweetController::class, 'create'])->name('tweets.create');
Route::post('/tweets', [TweetController::class, 'store'])->name('tweets.store');
Route::view('pusher1', 'pusher1');
Route::view('pusher2', 'pusher2');

require __DIR__ . '/auth.php';
