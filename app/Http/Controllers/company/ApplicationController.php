<?php

namespace App\Http\Controllers\company;

use App\Http\Controllers\Controller;
use App\Models\JobOffre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{
    public function apply(Request $request, $id)
    {
        $jobOffer = JobOffre::findOrFail($id);
    
        if (Auth::check()) {
            $userId = Auth::id();
            if ($jobOffer->users()->where('user_id', $userId)->exists()) {
                return redirect()->back()->with('error', 'You have already applied to this job offer.');
            }
            $jobOffer->users()->attach($userId, ['status' => 'pending']);
            return redirect()->back()->with('success', 'Application submitted successfully!');
        } else {
            return redirect()->route('login')->with('warning', 'Please log in to apply.');
        }
    }
    
    public function filtrProduct($years){
        $jobOffres= [];
        if($years=="1-2") $jobOffres = JobOffre::where('n_experiences',[2])->get();
        if($years=="3-4") $jobOffres = JobOffre::where('n_experiences',[3,4])->get();
        if($years=="5")  $jobOffres = JobOffre::where('n_experiences',5)->get();
        if($years=="6")  $jobOffres = JobOffre::where('n_experiences', '>', 6)->get();
        return view('users.searchJob', compact('jobOffres'));
    }
}
