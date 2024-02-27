<?php

namespace App\Http\Controllers\user\experience;

use App\Http\Controllers\Controller;
use App\Models\Experiences;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
            'position' => 'required',
            'description'=> 'required|string',
            'company'=> 'required|string',
            'start_date'=> 'required|date',
            'end_date'=> 'required|date',
        ]);

        $user = Auth::user();

        $experience = new Experiences([
            'position' => $request->position,
            'description' => $request->description,
            'company' => $request->company,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);

        // Save the education
        $experience->save();

        // Associate the experience with the user's profile
        $user->profile->experience()->associate($experience);

        // Save the profile
        $user->profile->save();

        return redirect()->route('profile.index')->with('status' , 'Experience added successfully');
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
