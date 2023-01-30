<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class AuthController extends Controller
{
    //
    public function logout(Request $request) {
        Auth::logout();
        return redirect('loginpage');
      }


      public function customLogin(Request $request)
      {
          $request->validate([
              'email' => 'required',
              'password' => 'required',
          ]);
          
          $credentials = $request->only('email', 'password');
          if (Auth::attempt($credentials)) {

            if(auth()->user()->role !='Admin' )
            {
              return redirect('loginpage')->with('message', 'Sorry  credentials not valid');
            }


              return redirect()->intended('home')
                          ->withSuccess('Signed in');
          }
         
          
    
        //   return redirect('loginpage'); 
          return redirect('loginpage')->with('message', 'Login details are not valid');
      }
}
