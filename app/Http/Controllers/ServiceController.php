<?php

namespace App\Http\Controllers;

use App\Facades\TestServiceFacade;
use Illuminate\Http\Request;
// use App\Services\TestService;

class ServiceController extends Controller
{
   function show(Request $request){
     $request->validate(['num'=>'required|min:1|max:3'],[
        'num.required'=>'this field is required',
        'num.min'=>'can not be less than 2',
        'num.max'=>'can not be more than 3 numbers',
    ]);
     $data=$request->num; 
     $response= TestServiceFacade::testData($data);
     return view('serviceView',['response'=>$response]);
   }
}
