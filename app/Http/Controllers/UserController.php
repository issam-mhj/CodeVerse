<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showHome()
    {
        $user = Auth::user();
        return view("user/home", ["user" => $user]);
    }
    public function showProfile()
    {
        $user = Auth::user();
        return view("user/profile", ["user" => $user]);
    }
    public function showUpdateProfile()
    {
        $user = Auth::user();
        return view("user/updateprofile", ["user" => $user]);
    }
}
