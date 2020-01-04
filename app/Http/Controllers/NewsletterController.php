<?php

namespace App\Http\Controllers;

use App\Model\User\Newsletter;
use Illuminate\Http\Request;
use App\Mail\NewsletterMail;

class NewsletterController extends Controller
{  

    public function store(Request $request)
   {

       // $username = strstr($request->email, '@', true);

       // \Mail::to($request->email)->send(new NewsletterMail($username));

   	   Newsletter::create([
          'email' => $request->email
       ]);
      
      return response()->json([
     
        'ouremail' => $request->email,
        'message' => 'Thanks for subscribing'
       
      ]);
   }

}
