<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/home', [UserController::class, "showHome"])->name("home");
Route::get('/profile', [UserController::class, "showProfile"])->name("profile");
Route::get('/profile/update', [UserController::class, "showUpdateProfile"])->name("updateprofile");
Route::post('/profile/update', [UserController::class, "updateProfile"])->name("updatedprofile");
Route::get('/posts', [PostController::class, "index"])->name("myposts");

require __DIR__ . '/auth.php';
