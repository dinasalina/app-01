<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserControl extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $users = User::paginate(10); // Assuming you have a User model to fetch users from the database

        // return view("users.index"); [
        //     "users"=> $users
        // ]

        return view("users.index", compact("users"));
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    $user = User::findOrFail($id);
    return view('users.edit', compact('user')); 
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
