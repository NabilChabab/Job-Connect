<?php

namespace App\Http\Controllers;

use App\Models\JobOffre;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $lastjoboffers = JobOffre::latest()->take(4)->get();
        return view('welcome', ['lastjoboffers' => $lastjoboffers]);
    }
}
