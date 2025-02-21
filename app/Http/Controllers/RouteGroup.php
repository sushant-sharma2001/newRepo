<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteGroup extends Controller
{
    function first(){
     return "student/name";
    }
    function second(){
    return "student/age";
    }
    function third(){
        return "student/address";
    }
    
}
