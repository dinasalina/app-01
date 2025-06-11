<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Auth\StoreUserRequest;
use App\Http\Requests\Auth\UpdateUserRequest;

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
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
{
    $validated = $request->validated();

    User::create([
        'name' => $validated['name'],
        'email' => $validated['email'],
        'password' => Hash::make($validated['password']),
    ]);

    return redirect()->route('users.index')->with('success', 'User created successfully.');
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
   public function update(UpdateUserRequest $request, User $user)
{
    $validated = $request->validated();

    $user->name = $validated['name'];
    $user->email = $validated['email'];

    if (!empty($validated['password'])) {
        $user->password = Hash::make($validated['password']);
    }

    $user->save();

    return redirect()->route('users.edit', $user->id)->with('success', 'User updated successfully.');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
