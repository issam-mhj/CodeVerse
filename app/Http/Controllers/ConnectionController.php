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

        // $connectedUserIds = $user->connections()->pluck('connected_user_id')
        //     ->merge($user->connectedWith()->pluck('user_id'))
        //     ->unique()
        //     ->toArray();

        // $connectedUserIds[] = $user->id;

        // $users = User::whereNotIn('id', $connectedUserIds)->get();

        return view("user/connections", ["user" => $user]);
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
        //
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
