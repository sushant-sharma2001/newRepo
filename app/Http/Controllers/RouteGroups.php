<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteGroups extends Controller
{
    function first(){
        return "first function";
    }

    function second(){
        return "second function";
    }

    function third(){
        return "third function";
    }

    function fetch($value){
        return $value;
    }
}
