<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $myposts = $user->posts;
        return view("/user/posts", ["user" => $user, "posts" => $myposts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string|max:255',
            'image' => 'sometimes',
            'codeSnippet' => 'sometimes',
        ]);
        $imagePath = null;
        $codeSnippet = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }
        if ($request->codeSnippet) {
            $codeSnippet = $request->codeSnippet;
        }

        $userid = Auth::user()->id;
        Post::create([
            'content' => $request->content,
            'image' => $imagePath,
            'codeSnippet' => $codeSnippet,
            'user_id' => $userid
        ]);
        return redirect()->back()->with("message", "your post has been created successfuly");
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $user = Auth::user();
        return view("user/updatePost", ["post" => $post, "user" => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $newpost = $request->validate([
            'content' => 'required|string|max:255',
            'image' => 'sometimes',
            'codeSnippet' => 'sometimes',
        ]);
        $codeSnippet = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $newpost['image'] = $imagePath;
        }
        if ($request->codeSnippet) {
            $codeSnippet = $request->codeSnippet;
            $newpost['codeSnippet'] = $codeSnippet;
        }


        $post->update($newpost);
        return redirect()->back()->with("message", "your post has been created successfuly");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->back()->with("deleted", "the post has deleted successfuly");
    }
}
