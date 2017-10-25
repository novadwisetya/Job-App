<?php

namespace App\Http\Controllers;
use Sentinel;
use Session;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function signup()
        {
        
        return view('auth.register');
        
        }
    public function signup_store(UserRequest $request)
    {
        //// below code will register and automatic activate accoun
        $newUser = Sentinel::registerAndActivate(array(           
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'password' => $request->password
            ));

        $writerrole = Sentinel::findRoleByName('Writer');
        $newUser->roles()->attach($writerrole);

        Session::flash('notice', 'Success create new user');
        return redirect()->back();
    }
}
