<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use Illuminate\Support\Str;
//use Illuminate\Support\Facades\Validator;

class CompanyController extends Controller
{
    public function getAllCompany()
    {
    	$company = Company::latest()->paginate(3);
    	//$company = \DB::table('companies')->get();
    	
    	return view('frontend.crud.index',compact('company'));
    }

     public function showCompanyForm()
    {
        return view('frontend.crud.create');
    }

     public function addCompany(Request $request)
    { 
     
     // $request->validate([
     //    'name' => 'required|unique:companies',
     //    'address' => 'required'
     // ]);
    $validator = \Validator::make($request->all(), [
        'name' => 'required|unique:companies|max:255',
        'address' => 'required',
    ]);

    if ($validator->fails()) {
        return redirect()
                    ->back()
                    ->withErrors($validator)
                    ->withInput();
    }


     $company = new Company;
     $company->name = $request->name;
     $company->slug = Str::slug($request->name);
     $company->address = $request->address;
     $company->save();

     \Session::flash('message',"Company added successfully");

     return redirect()->back();

    }


    public function showEditForm(Request $request , $id) {

    	$company = Company::find($id);
    	return view('frontend.crud.update',compact('company'));

    }

    public function submitFormData(Request $request , $id)
    {

    	$company = Company::find($id);

    	$company->update([
           
           'name' => $request->name,
           'slug' => Str::slug($request->name),
           'address' => $request->address
         
    	]);

    	return redirect()->back();
    	
    }

    public function delete($id){
        $company = Company::find($id);
        \Session::flash('message',"Company deleted successfully");
        $company->delete();
        return redirect()->back();
    }
}
