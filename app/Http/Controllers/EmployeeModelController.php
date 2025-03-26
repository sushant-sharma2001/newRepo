<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\DB;

class EmployeeModelController extends Controller
{
    function show(){
        // $students=Employee::all();
        // return $students;
        // return DB::table('employees')->get();       //using query builder

        // foreach(Employee::all() as $emp){
        //     echo"$emp"."<br>";
        // }

        // $employee=Employee::where('id',1)->get();
        // return $employee;
        // return DB::table('employees')->where('id',1)->get();        using query builder

        // return Employee::all();
        // return DB::table('employees')->get();                       using query builder

        // return Employee::orderBy('id')->get();
        // return DB::table('employees')->orderBy('name')->get();      using query builder

        // return Employee::find(4);

        // $emp=new Employee();
        // $emp->name='aman';
        // $emp->email='aman@gmail.com';
        // $emp->address='shimla';
        // $emp->save();
        // return Employee::all();

        // $emp=Employee::find(8);
        // $emp->name='naman';
        // $emp->email='naman@gmail.com';
        // $emp->save();
        // return Employee::all();

        // $emp=Employee::find(9);
        // $emp->delete();
        // return Employee::all();

        // return Employee::count();

        // return Employee::min('id');
        // return Employee::max('id');

        // $emp=Employee::paginate(10);
        // return view('employee-view',['data'=>$emp]);

        //  Employee::destroy([7,8]);
        //  return Employee::all();

        // Employee::where('id',50)->delete();
        // return Employee::all();

        // $emp=Employee::findOrFail(1);
        // return $emp;
    
                                                    //one to one relation from employees to profiles table {hasOne(Profile::class,'emp_id')}
        // $emp=Employee::find(2);
        // $pro=$emp->profile;
        // echo "$emp->name :"." $pro->company";   

        // $employees=Employee::with('profile')->get();
        // foreach($employees as $emp){
        //     $pro=$emp->profile;
        //     echo "$emp->name :"." "."$pro->company<br>";
        // }



                                                //one to many relationship from employees to contact table {hasMany(Contact::class,'emp_id')}
    // $emp = Employee::find(2);
    // if ($emp) {
    //     $contacts = $emp->contact;                        // Fetch the collection of contacts
    //     foreach ($contacts as $contact) {
    //         echo $contact->phone . '<br>';              // Access the 'phone' property for each contact
    //     }
    // } else {
    //     echo 'Employee not found';
    // }


    // $employees=Employee::with('contact')->get();
    // foreach($employees as $emp){
    //     $pro=$emp->profile;
    //     echo "$emp->name : $pro->company <br>";
    //     foreach($emp->contact as $cont){
    //         echo "|"."+91-$cont->phone|<br>";
    //     }
    //     echo "<br>";
    // }


    // $contacts = Employee::with('contact', 'profile')
    // ->whereHas('profile', function ($query) {
    //     $query->where('company', 'vdoit');
    // })
    // ->get();

    // foreach ($contacts as $contact) {
    // echo "{$contact->name} :{$contact->profile->company}<br>";
    // }


    
    // $employees = Employee::with('profile','contact')->get(); 
    // return $employees;

     
    // $names = Employee::with('contact', 'profile')->pluck('name');
    // return $names;



 }
}
