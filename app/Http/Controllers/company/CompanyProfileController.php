<?php

namespace App\Http\Controllers\company;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyProfileController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $company = Auth::user()->representative->company;
        return view('company.profile',['company' => $company]);
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
    public function update(string $id, Request $request)
    {
        $company = Company::findOrFail($id);
        $data = $request->validate([
            'company_name' => "required",
            'company_email' => "required",
            'description' => "required",
        ]);
        $company->update($data);

        if ($request->hasFile('image')) {
            $company->addMediaFromRequest('image')->toMediaCollection('media/companies', 'media_companies');
        }
    
        return redirect(route('companyprofile.index'));
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
