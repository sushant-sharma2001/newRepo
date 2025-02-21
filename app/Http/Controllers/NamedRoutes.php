<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NamedRoutes extends Controller
{
    function disp(){
        return to_route('abt');
        // return view('about2');
    }
}
