<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    //
    function login(Request $request)
    {
      //dump($request);     
      //echo $request->email; 
      //dump(User::all());
      $data = User::all()->where('email',$request->email)->first();
      $data1=(object)$data;
      if(!$data)
      {
        echo 'user notfound';
      }  
      if(md5($request->password)==($data1->password)){
          return view ('Loginpage');
      } 
      else 
      {
          echo md5($request->password);
          echo '     ';
          echo md5($data1->password);
      }
     }
}
