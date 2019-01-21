<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function SignUpForm(){
        return view('Sign-up');

    }
    public function signUpSuccessfully(Request $request){
        return $request;
    }
}
