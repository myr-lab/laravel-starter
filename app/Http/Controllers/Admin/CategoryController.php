<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin'); 
    }
    public function index()
    {
       $categories = \App\Model\User\Category::latest()->get();
       return view('backend.category.index',compact('categories'));
    }

    public function create()
    {
        return view('backend.category.create');
    }

    
    public function store(Request $request)
    { 
       $request->validate([
         'name' => 'required'
       ]);

       
       \App\Model\User\Category::create([
        
        'name' => $request->name,
        'slug' => \Str::slug($request->name),
        'isActive' => $request->isActive

       ]);

       session()->flash('message','Category inserted successfully');

       return redirect()->back();
    }

  
    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {   
        $category = \App\Model\User\Category::findOrFail($id);
        return view('backend.category.edit',compact('category'));
    }

   
    public function update(Request $request, $id)
    {
       $request->validate([
         'name' => 'required|unique:categories'
       ]);

       
       \App\Model\User\Category::where('id',$id)->update([
        
        'name' => $request->name,
        'slug' => \Str::slug($request->name),
        'isActive' => $request->isActive

       ]);

       session()->flash('message','Category updated successfully');

       return redirect()->back();
  
    }

    public function destroy($id)
    {
        //
    }
}
