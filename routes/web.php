<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/home', [UserController::class, "showHome"])->name("home");
Route::get('/profile', [UserController::class, "showProfile"])->name("profile");
Route::get('/profile/update', [UserController::class, "showUpdateProfile"])->name("updateprofile");

require __DIR__ . '/auth.php';
