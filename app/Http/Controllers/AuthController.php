<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    function registerPage()
    {
        return view('authRegisterView');
    }


    function register(Request $request){

        $validated=$request->validate([
           'name'=>'required|min:2|max:15',
           'email'=>'required|email',
           'password'=>'required|confirmed',
        ]);

        $user=User::create($validated);
        $user->save();
        
        if($user){
            $request->session()->flash('success', 'Registration successful! Please log in.');
            return redirect()->route('login');
        }
    }

    function loginCheck(Request $request){
     
        $credentials=$request->validate([
            'email'=>'required|email',
            'password'=>'required',
         ]);

         if(Auth::attempt($credentials)){
            return redirect()->route('dashboard');
         }
         else {
                  return back()->withErrors([
                       'password' => 'The provided credentials do not match our records.',
                  ])->withInput(); 
        }
    }

    function dashboard(){
        // if(Auth::check()){
            return view('authDashboard');                          //using middleware and returning only this view
        // }
        // else{
            // return redirect('login');
        // }
    }

    function logout(){
        Auth::logout();
        return view('authLoginView');
    }
}
