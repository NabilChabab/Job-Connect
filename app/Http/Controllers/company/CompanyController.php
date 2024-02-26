<?php

namespace App\Http\Controllers\company;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        return view('company.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('company.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
         $data = $request->validate([
            'company_name' => "required",
            'company_email' => "required",
            'domaine' => "required",
            'location' => "required",
            'founded_date' => "required",
        ]);

        $company=Company::create($data);
        return redirect()->route('company.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        //
        return view('company.show',['company' => $company]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        //
        return view('company.edit', ['company' => $company]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Company $company, Request $request)
    {
        //
        $data = $request->validate([
            'name' => "required",
            'description' => "required",
            'domaine' => "required",
            'location' => "required",
            'start_date' => "required",
        ]);

        $company->update($data);
        return redirect(route("company"))->with('success', "company successfully updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        //
        $company->delete();
        return redirect(route("company"))->with('success', "company successfully deleted"); 
    }
}
