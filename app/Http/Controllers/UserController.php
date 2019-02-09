<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Session;
use Illuminate\Support\Facades\Redirect;


class UserController extends Controller
{   

    public function home()
    {

        if(Session::get('login_success'))
        {
            return view('content.home');
        }
        else return view('welcome');
    }
    
    // login request
    public function login(Request $request)
    {   
        $user = DB::table('users')->select('email','password')->where(['email'=>$request->email,'password'=>$request->password])->first();

        if($user)
        {   
            Session::put("login_success",'success');
            return view('content.home');
        }
        else 
        {
            Session::put('login_fail','Incorrect email or password');

            return redirect()->back();
        }
        
        
    }

    // registration request
    public function register(Request $request)
    {
        $user = new User;

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        if($request->password == $request->repeat_password)
        {
            $user->save();
            Session::put('reg_success','Registered successfully!');

            return redirect()->back();
        }
        else
        {
            Session::put('reg_fail','Password mismatched!');

            return redirect()->back();
        }
    }

    public function logout()
    {   
        Session::put('login_success',null);
        return Redirect::to('/');
    }
}
