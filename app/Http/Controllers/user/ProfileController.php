<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     // Check if profile exists, otherwise default to an empty array
     $user = Auth::user(); // Get the authenticated user

     $educations = $user->profile->education()->get();
     $experiences = $user->profile->experience()->get();
     $skills = Skill::all();
     $user_skills = $user->profile->skills->all();
    return view('users.profile',compact('educations' , 'experiences' , 'skills' , 'user_skills'));
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
