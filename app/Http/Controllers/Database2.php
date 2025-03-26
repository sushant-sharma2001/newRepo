<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class Database2 extends Controller
{
  function get(){
    $students=Student::all();
    return view('database2',compact('students'));                //we use compact() when name of key and value is same
    
    // $students=Student::pluck('name');
    // return view('home',compact('students'));                     //we use compact() when name of key and value is same
    
    // $students=Student::find(1);
    // return view('home',compact('students'));                     //we use compact() when name of key and value is same

    // $students=Student::where('id','=','2')->get();
    // return view('home',compact('students'));                        //we use compact() when name of key and value is same

    // $students=Student::where('id',1)->get();
    // return view('home',['students'=>$students]);

  }
}
