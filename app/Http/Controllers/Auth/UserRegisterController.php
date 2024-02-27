<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Profiles;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.UserRegister');
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
            'fullname' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required',
            'password_confirmation' => 'required|same:password'
        ]);

        // Create a new user instance
        $user = User::create([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        // Attach the user role (assuming this part is correct)
        $user->roles()->attach([2]);

        // Create a new profile instance and associate it with the user
        $profile = new Profiles([
            'user_id' => $user->id,
            // Add other profile attributes as needed
        ]);

        // Save the profile
        $profile->save();

        return redirect(route('login'));
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $request->validate([
        'fullname' => 'required',
        'email' => 'required|unique:users,email,' . $id,
        'profile' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validation for image upload
    ]);

    $user = User::findOrFail($id);

    $user->fullname = $request->fullname;
    $user->email = $request->email;

    if ($request->hasFile('profile')) {
        $user->clearMediaCollection('media/users');

        $user->addMediaFromRequest('profile')
            ->toMediaCollection('media/users' , 'media_users');
    }

    // Save the updated user data
    $user->save();

    return redirect()->back()->with('status', 'Profile updated successfully.');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
