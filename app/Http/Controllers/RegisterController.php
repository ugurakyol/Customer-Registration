<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegisterController extends Controller
{
    //

    function register(Request $request)
    {
        $user = new User;
        $this->validate($request,
        [
            'name'=>'required|max:50',
            'surname'=>'required|max:50',
            'email'=>'required|max:50',
            'password'=>'required|max:50',
            'password'=>'required|min:6',
            'confirmPassword' => 'required|same:password',
            'email'=>'required|unique:users',
        ]);        
        
    }
}
