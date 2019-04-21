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
            'sex'=>'required|max:10',
            'yob'=>'required|max:20',
            'address'=>'required|max:100',          
            'phonenumber'=>'required|max:20',
            'email'=>'required|max:50',
            'password'=>'required|max:50',
            'password'=>'required|min:6',
            'confirmPassword' => 'required|same:password',
            'email'=>'required|unique:users',
        ]);        
        $input = (object) $request->all();
        $input->password = md5($input->password);
        $input->confirmPassword = md5($input->confirmPassword);
        $data =(array) $input;
      $user->fill($data);
  $user->save();
        return redirect()->back();

    }
}