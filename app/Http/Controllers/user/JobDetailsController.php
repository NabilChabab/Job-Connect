<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\JobOffre;

class JobDetailsController extends Controller
{
    public Function index($id)
    {
        $joboffer = JobOffre::find($id);
        if (!$joboffer) {
            abort(404);
        }
        return view('users.jobDetails', compact('joboffer'));
    }
}
