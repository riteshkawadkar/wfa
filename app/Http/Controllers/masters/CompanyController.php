<?php

namespace App\Http\Controllers\masters;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCompanyRequest;
use App\Http\Requests\EditCompanyRequest;
use App\Models\masters\Company;
use Barryvdh\Debugbar\Facades\Debugbar;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = Company::all()->first();
        return view("masters.company.index",
        [
          'company' => $company,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view("masters.company.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCompanyRequest  $request)
    {
      $data = $request->validated();

      // Save the logo
      if ($request->has('company_logo')) {
        $image = $request->file('company_logo');
        $filename = $request->short_name.'.'.$image->getClientOriginalExtension();
        $path = public_path('assets/img/logo/'.$filename);
        Image::make($image->getRealPath())->resize(200, 200)->save($path); // Resize the image to 200x200 pixels
        $data['company_logo'] = '/img/logo/'.$filename;
      }

      // create a new company using the validated data
      $company = Company::create($data);

      // redirect to the company index page with a success message
      return redirect()->route('companies.index')
        ->with('success', 'Company created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\masters\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\masters\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
      return view("masters.company.edit", [
        'company' => $company,
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\masters\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(EditCompanyRequest $request, Company $company)
    {
      $data = $request->validated();

      // Save the logo
      if ($request->has('company_logo')) {
        $image = $request->file('company_logo');
        $filename = $request->short_name.'.'.$image->getClientOriginalExtension();
        $path = public_path('assets/img/logo/'.$filename);
        Image::make($image->getRealPath())->resize(200, 200)->save($path); // Resize the image to 200x200 pixels
        $data['company_logo'] = '/img/logo/'.$filename;
      }

      // update a new company using the validated data
      $company->update($data);

      // redirect to the company index page with a success message
      return redirect()->route('companies.index')
        ->with('success', 'Company updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\masters\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
      $company = Company::findOrFail($id);
      $company->delete();

      return redirect()->route('companies.index')
        ->with('success', 'Account deactivated successfully.');
    }
}
