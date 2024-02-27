<?php

namespace App\Http\Controllers\company;

use App\Http\Controllers\Controller;
use App\Models\JobOffre;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobOffreController extends Controller
{
    //
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $company = Auth::user()->representative->company; ['company' => $company]
        $jobOffres = JobOffre::all();
        return view('job_offres.index',compact('jobOffres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $skills =Skill::all();
        return view('job_offres.create',compact('skills'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $id = Auth::user()->representative->company->id ;
        //dd($id);
         $data = $request->validate([
            'title' => "required",
           'contracte' => "required",
            'salary' => "required",
            'n_experiences' => "required",
            'content' => "required",
            // 'companie_id'=>$id,
        ]);

        
        $data['companie_id'] = $id;
        $jobOffre=JobOffre::create($data);
        $skills = $request->input('skills');
        $jobOffre->skill()->sync($skills);
        if ($request->hasFile('image')) {
            $jobOffre->addMediaFromRequest('content')->toMediaCollection('media/offres','media_offres');
        }
        return redirect()->route('job_offres.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(JobOffre $jobOffre)
    {
        //
        return view('job_offres.show',['jobOffre' => $jobOffre]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JobOffre $jobOffre)
    {
        //
        return view('job_offres.edit', ['jobOffre' => $jobOffre]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(JobOffre $jobOffre, Request $request)
    {
        //
        $id = Auth::user()->representative->company->id ;
        //dd($id);
         $data = $request->validate([
            'title' => "required",
           'contracte' => "required",
            'salary' => "required",
            'n_experiences' => "required",
            'content' => "required",
            // 'companie_id'=>$id,
        ]);

        
        $data['companie_id'] = $id;
        $jobOffre->update($data);
        $skills = $request->input('skills');
        $jobOffre->skill()->sync($skills);
        if ($request->hasFile('image')) {
            $jobOffre->addMediaFromRequest('content')->toMediaCollection('media/offres','media_offres');
        }
        return redirect(route("job_offres"))->with('success', "jobOffre successfully updated");
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
