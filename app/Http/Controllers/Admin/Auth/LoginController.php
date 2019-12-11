<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
   
    use AuthenticatesUsers;

    protected $redirectTo = '/backend';
    
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout'); 
    }

    public function showLoginForm()
    {
        return view('backend.login');
    }
    
    public function login(Request $request) 
    {
        $this->validateLogin($request);

        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }

        return $this->sendFailedLoginResponse($request);
       
    }

    public function logout(Request $request)
    {
        $this->guard('admin')->logout();
     
        $request->session()->invalidate();

        return redirect('/backend/login');
    }


    protected function guard() 
    {
        return Auth::guard('admin');
    }
}
