<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User\User;
use Carbon\Carbon;

class LoginController extends Controller
{
     public function ShowLoginForm()
    {
    	return view('frontend.auth.login');
    }

    public function HandleLogin(Request $request)
    {
    	
    	$request->validate([
         
           'email' => 'required',
           'password' => 'required'
            
     	]);

        $credentials = $request->except(['_token']);

        $user = User::where('email',$request->email)->first();

        if($user->email_verified == 1){

        if (auth()->attempt($credentials)) {

                 $user = auth()->user();

                 $user->last_login = Carbon::now();

                 $user->save();

                 return redirect()->route('home');

            }
           
        }

        session()->flash('message', 'You are not an active user, please activate your account or contact with admin');

        return redirect()->back();
    }
}
