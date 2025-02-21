<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use UserService;

class ServiceController1 extends Controller
{
    function show(Request $request){
        // $validated=$request->validate([                           //validation rules 
        //     'name'=>'required|min:2|max:15',
        //     'age'=>'required|integer|between:8,24',
        //     'stream'=>'required',
        //     'roll'=>'required|digits:5',
        //     'check'=>'required',
        //     'address'=>'required'
        // ],
        // [                                                         // messages for violated validation rules
        //     'required'=>'this field is required',
        //     'name.min'=>'name must be of atleast 2 letters',
        //     'age.between'=>'only older than 8 years and younger than 25 years can fill this form',
        //     'digits'=>'roll no must be of 5 digits only',
        //     'check.required'=>'check this field to submit data'
        // ]);



        // return $validated['name'];
        //  return $request->fullurl();   
        //  return $request->fullUrlWithQuery(['name'=>'akash']); 
        //  return $request->fullUrlWithoutQuery(['name']); 
        //  return $request->host(); 
        //  return $request->httpHost(); 
        //  return $request->schemeAndHttpHost();
        //  return $request->method();
        //  return $request->ip();
        //  return ($request->ips());
        //  return $request->all();
        //  return $request->collect('name');
        //  return $request->input('name');
        //  return $request->input('name','akash');
        //  return $request->input();
        //  return $request->query('name','akash');
        //  return $request->query();
        //  return $request->string('name')->trim();
        //  return $request->integer('roll');
        //  return $request->name;
        //  return $request->only('name','age');
        //  return $request->except('name','age');
        
        //  if( $request->has('name','password')){
        //     return true;
        //  }
        // else{
        //     return false;
        // }

        // if($request->hasAny('name','password')){
        //     return true;
        // }
        // else{
        //     return false;
        // }
         
        // $request->flash();
        // return $request->cookie();


      
        // $response=UserService::process($validated);
        // return view('serviceView1',['fetch'=>$response]);


        UserService::process('hello');
    }
}   
