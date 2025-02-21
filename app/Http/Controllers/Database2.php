<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Database2 extends Controller
{
  function get(){
    $students=\App\Models\Student::all();
    return view('database2',['data'=>$students]);
    
    // $students=\App\Models\Student::pluck('name');
    // return view('home',['data'=>$students]);
    
    // $students=\App\Models\Student::find(1);
    // return view('home',['data'=>$students]);

    // $students=\App\Models\Student::where('id','=','2')->get();
    // return view('home',['data'=>$students]);

    // $students=\App\Models\Student::where('id',1)->get();
    // return view('home',['data'=>$students]);

    // $students=\App\Models\Student::where('id',1)->get();
    // return view('home',['data'=>$students]);
  }
}
