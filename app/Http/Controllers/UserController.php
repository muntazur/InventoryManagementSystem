<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{   
    // login request
    public function login(Request $request)
    {
        echo "hello";
        
    }

    // registration request
    public function register(Request $request)
    {
       echo "Registered";
    }
}
