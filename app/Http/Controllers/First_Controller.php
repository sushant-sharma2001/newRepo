<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class First_Controller extends Controller
{
    //
    function getUser(){
        return "Sushant sharma";
    }

    function greet(){
        return "hello world..!!";
    }

    function getAddress($add){
        return $add;
    }

    function view_page(){
        return view('F_C');
    }

    function view_page1($data){
        // echo $data;
        return view('F_C1',['data_name'=>$data]);
    }
}
