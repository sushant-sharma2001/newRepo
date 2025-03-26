<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileModelController extends Controller
{
    function show(){
      // return Profile::all();

      // $pro=Profile::find(1);
      // $emp=$pro->employee;
      // echo "$emp->name";

      $profiles=Profile::with('employee')->get();
      foreach($profiles as $pro){
        $emp=$pro->employee;
        echo "$pro->company :"." "."$emp->name<br>";
      }
    }
}
