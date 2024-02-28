<?php

namespace App\Http\Controllers\user\education;

use App\Http\Controllers\Controller;
use App\Models\Education;
use App\Models\Educations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EducationController extends Controller
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
        'degree' => 'required',
        'university'=> 'required',
        'description'=> 'required|string',
        'start_date'=> 'required|date',
        'end_date'=> 'required|date',
    ]);

    // Get the authenticated user
    $user = Auth::user();

    // Create a new education instance
    $education = new Educations([
        'degree' => $request->degree,
        'university' => $request->university,
        'description' => $request->description,
        'start_date' => $request->start_date,
        'end_date' => $request->end_date,
    ]);

    // Save the education
    $education->save();

    // Attach the education to the user's profile
    $user->profile->education_id = $education->id;
    $user->profile->save();

    return redirect()->route('profile.index')->with('status' , 'Education added successfully');
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
