<?php

namespace App\Http\Controllers;

use App\Models\Connection;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConnectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $connections = Connection::where('user_id', $user->id)->orWhere('user_id2', $user->id)->get();
        $friends = Connection::where(['user_id' => $user->id, 'is_accepted' => true])->orWhere(['user_id2' => $user->id, 'is_accepted' => true])->get();
        $users = User::where('id', '!=', $user->id)->get();
        return view("user/connections", ["users" => $users, "user" => $user, "connections" => $connections, "friends" => $friends]);
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
        Connection::create([
            "user_id" => Auth::user()->id,
            "user_id2" => $request->id,
            "is_accepted" => false
        ]);
        return redirect()->back()->with("the connection has sent successfuly");
    }

    /**
     * Display the specified resource.
     */
    public function show(Connection $connection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Connection $connection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Connection $connection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Connection $connection)
    {
        //
    }
}
