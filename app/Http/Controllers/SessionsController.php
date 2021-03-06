<?php

namespace App\Http\Controllers;
use Sentinel;
use Session;
use App\Http\Requests\SessionRequest;
use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function login()
    {
        if ($user = Sentinel::check())
        {
        Session::flash("notice", "You has login ".$user->email);
        return redirect('/');
        } else
        {
        return view('auth.login');
        }
    }
    public function login_store(SessionRequest $request)
    {
        if($user = Sentinel::authenticate($request->all())) 
        {
            Session::flash("notice", "Welcome ".$user->email);
            return redirect()->intended('/');
        } else 
        {
            Session::flash("error", "Login fails");
            return view('auth.login');
        }
    }
    public function logout() 
    {
        Sentinel::logout();
        Session::flash("notice", "Logout success");
        return redirect('/');
    }
    
}
