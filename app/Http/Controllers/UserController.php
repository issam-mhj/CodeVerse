<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use App\Models\Connection;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showHome()
    {
        $user = Auth::user();
        $connections = Connection::where('user_id', $user->id)->orWhere('user_id2', $user->id)->get();
        $posts = Post::latest()->get();;
        return view("user/home", ["user" => $user, "posts" => $posts, "connections" => $connections]);
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
    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        $validatedData = $request->validate([
            'name' => 'sometimes|string|max:255',
            'profession' => 'sometimes|string|max:255',
            'age' => 'sometimes',
            'image' => 'sometimes',
            'location' => 'sometimes|string|max:255',
            'email' => 'sometimes|email|unique:users,email,' . $user->id,
            'biography' => 'sometimes',
            'githubProfile' => 'sometimes',
            'tech' => 'sometimes',
            'cert' => 'sometimes',
            'lang' => 'sometimes'
        ]);
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $validatedData['image'] = $imagePath;
        }
        $user->update($validatedData);
        return redirect()->back()->with('success', 'Information updated successfully!');
    }
}
