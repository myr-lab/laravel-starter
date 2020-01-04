<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Model\User\User;
use App\Mail\VerificationEmail;

class SignupController extends Controller
{
    
    
    public function showRegistrationForm()
    {
    	return view('frontend.auth.signup');
    }

    public function handleRegistration(Request $request)
     {
     	
     	$request->validate([
           
           'name' => 'required',
           'email' => 'required|unique:users',
           'password' => 'required|min:6|confirmed'
            
     	]);

     	$user = User::create([
            'name' => trim($request->input('name')),
            'email' => strtolower($request->input('email')),
            'password' => bcrypt($request->input('password')),
            'email_verification_token' => \Str::random(32)
        ]);

        \Mail::to($user->email)->send(new VerificationEmail($user));

        session()->flash('message', 'Please check your email to activate your account');
       
        return redirect()->back();

     } 


}
