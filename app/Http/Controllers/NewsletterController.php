<?php

namespace App\Http\Controllers;

use App\Newsletter;
use Illuminate\Http\Request;
use App\Http\Validation\NewsletterValidation;
use App\Mail\NewsletterMail;

class NewsletterController extends Controller
{  

   use NewsletterValidation;
    
   public function show()
   {
   	  return view('frontend.news.index');
   }
   
    public function store(Request $request)
   {
   	
   	   $this->newsletterFormValidation($request->all());
       
       $email = $request->email;
       $username = strstr($email, '@', true);

       \Mail::to($request->email)->send(new NewsletterMail($username));

   	   Newsletter::create($request->all());
      
       \Session::flash('message','Thanks for joinig');
       //return request()->input('email');

       return redirect(route('newsletter'));

   }

}
