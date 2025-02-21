<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function show($id){
        echo $id;   
        return view('user-profile');    
    }
}
