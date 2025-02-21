<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller_form extends Controller
{
    function addUser(Request $request){
     echo "$request->username<br>";
     echo "$request->email<br>";
     echo "$request->city<br>";
     print_r($request->skills);
     echo"<br>";
     echo "$request->gender<br>";
     echo "$request->state<br>";
    
    }
}
