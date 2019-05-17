<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::orderBy('created_at', 'desc')->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $company = new Company();
        $company->company_id = $request->company_id;
        $company->company_name = $request->company_name;
        $company->representive_name = $request->representive_name;
        $company->state = $request->state;
        $company->city = $request->city;
        $company->address1 = $request->address1;
        $company->address2 = $request->address2;
        $company->tel = $request->tel;
        $company->account_plan = $request->account_plan;
        $company->approval = $request->approval;
        $company->tax = $request->tax;
        $company->expire = $request->expire;
        $company->expire2 = $request->expire2;
        $company->save(); 
        return Company::all();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company = Company::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        $company = Company::findOrFail($id);
        $company->company_name = $request->company_name;
        $company->representive_name = $request->representive_name;
        $company->state = $request->state;
        $company->city = $request->city;
        $company->address1 = $request->address1;
        $company->address2 = $request->address2;
        $company->tel = $request->tel;
        $company->account_plan = $request->account_plan;
        $company->approval = $request->approval;
        $company->tax = $request->tax;
        $company->expire = $request->expire;
        $company->expire2 = $request->expire2;
        $company->save(); 

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $company = Company::findOrFail($id);
        $company -> delete();
    }
}
