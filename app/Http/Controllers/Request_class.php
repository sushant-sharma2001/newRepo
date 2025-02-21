<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPUnit\Framework\MockObject\ReturnValueNotConfiguredException;

class Request_class extends Controller
{
    function fetch(Request $request){
        // return $request->path();
        // return $request->method();
        return $request->all();
        // return $request->url();
        // return $request->name;  
        // return $request->input();
        // return $request->collect();
        // return $request->ip();
    }
}
