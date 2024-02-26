<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\JobOffre;
use Illuminate\Http\Request;

class JobOffreController extends Controller
{
    //
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        return view('jobOffres.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('jobOffre.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
         $data = $request->validate([
            'title' => "required",
            //'contracte' => "required",
            //'salary' => "required",
            'n_experiences' => "required",
            'content' => "required",
        ]);

        $jobOffre=JobOffre::create($data);
        return redirect()->route('jobOffre.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(JobOffre $jobOffre)
    {
        //
        return view('jobOffre.show',['jobOffre' => $jobOffre]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JobOffre $jobOffre)
    {
        //
        return view('jobOffre.edit', ['jobOffre' => $jobOffre]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(JobOffre $jobOffre, Request $request)
    {
        //
        $data = $request->validate([
            'title' => "required",
            //'contracte' => "required",
            //'salary' => "required",
            'n_experiences' => "required",
            'content' => "required",
        ]);

        $jobOffre->update($data);
        return redirect(route("jobOffre"))->with('success', "jobOffre successfully updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JobOffre $jobOffre)
    {
        //
        $jobOffre->delete();
        return redirect(route("jobOffre"))->with('success', "jobOffre successfully deleted"); 
    }
}
