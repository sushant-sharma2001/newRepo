<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use US;      //change to UserService later                 // Import the Facade alias-->UserService here is facade given name of service 

class User_Controller extends Controller
{
    function show($id){
        $response=US::process($id);
        return view('user-profile',['data'=>$response]);
    }
}
