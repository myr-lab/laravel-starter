<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Notification;
use App\Notifications\NewpostNotify;

class PostController extends Controller
{
    
    public function index()
    {
        $posts = \App\Model\User\Post::latest()->get();

        return view('backend.post.index',compact('posts'));
    }

    public function create()
    {   
        $categories = \App\Model\User\Category::where('isActive',1)->get();
        return view('backend.post.create',['categories' => $categories]);
    }

    public function store(Request $request)
    {
       $request->validate([
          'title' => 'required',
          'body' => 'required',
          'category_id' => 'required'
       ]);
       
       $post = \App\Model\User\Post::create([
        
        'title' => $request->title,
        'slug' => \Str::slug($request->title),
        'body' => $request->body,
        'category_id' => $request->category_id,
        'isActive' => $request->isActive,
 
       ]);
       
       $user = \App\Model\User\Newsletter::all();
       
       foreach($user as $subscriber){

       Notification::route('mail' , $subscriber->email) 
                          ->notify(new NewPostNotify($post)); 

       }

       session()->flash('message','Post inserted successfully');

       return redirect()->back();

    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
