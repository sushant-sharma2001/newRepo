<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller1 extends Controller
{
    function greet(){
        return view('view1');
    }

    function user($c){
      return view('view1',['name'=>$c]);
    }
}
