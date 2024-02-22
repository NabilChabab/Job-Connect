<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Representative;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CompanyRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.CompanyRegister');
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
    $validate = $request->validate([
        'fullname' => 'required',
        'email' => 'required|email|unique:users,email',
        'company_name' => 'required',
        'company_email' => 'required|unique:users,email',
        'domaine' => 'required',
        'location' => 'required',
        'founded_date' => 'required|date',
        'password' => 'required',
        'password_confirmation' => 'required|same:password'
    ]);

    $userData = $request->only(['fullname', 'email']);
    $companyData = $request->except(['_token', 'fullname', 'email', 'password_confirmation', 'password']);

    $userData['password'] = Hash::make($request->password);

    $representativeUser = User::create($userData);
    $representativeUser->roles()->attach([4]);

    $company = Company::create($companyData);

    Representative::create([
        'name' => $request->fullname,
        'company_id' => $company->id,
        'user_id' => $representativeUser->id,
    ]);

    return redirect(route('login'));
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
