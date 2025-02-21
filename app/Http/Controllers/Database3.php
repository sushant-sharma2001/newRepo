<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\Student1;

class Database3 extends Controller
{
    function add(Request $request){
        $student=new Student1();
        $student->name=$request->name;
        $student->email=$request->mail;
        $student->age=$request->age;
        $student->save();
        if($student){
            echo "new entry successful";
        }
        else{
            echo "data not entered..!!";
        }
        // return $request->input();   <!--to see our input data-->
    }

    function get(){
        $data=Student::all();
       return view('list-student',['data'=>$data]);
    }
}
