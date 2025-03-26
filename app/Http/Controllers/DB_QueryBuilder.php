<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class DB_QueryBuilder extends Controller
{
   function first(){
   //  $users=DB::table('users')->get();
   //  return $users;
   // return User::get();                                  //using model

    // $users=DB::table('users')->get('name');
   //  $users=DB::table('users')->get(['id','name','email']);
   //  return $users;
   // return User::get(['name','id']);                   //using model

   //  $users=DB::table('users')->get();
   //  foreach($users as $user){
   //     echo "$user->name"."<br>";
   //   }
   // return User::pluck('name');                          //using model 

    //  $users=DB::table('users')->where('id','2')->get();    
    // $users=DB::table('users')->where('name','=','aman')->get();  
    // return $users;
   //  return User::where('id','2')->get();                    //using model

   //  $user=DB::table('users')->where('name','aayush')->first();
   //  $users=DB::table('users')->where('name','aayush')->firstorfail();
   //  return $user;

   // $email=DB::table('users')->where('name','aman')->value('email');
   // return $email;

   // $user=DB::table('users')->find(2);
   // return $user;
   // return User::find(2);                                  //using model

   // $names=DB::table('users')->pluck('name');
   // return $names;
   // return User::pluck('name');                             // using model 


   // DB::table('users')->orderby('id')->chunk(5,function($users){
   //    static $chunkNumber=1;
   //    echo "$chunkNumber"."<br>";
   //    foreach($users as $user){
   //       echo"$user->name"."<br>";
   //    }
   //    $chunkNumber++;      
   // });

   // $users=DB::table('users')->count();
   // return $users;
   // return User::count();                                   //using model
   
   // $users=DB::table('users')->max('id');
   // $users=DB::table('users')->min('id');
   // return $users;
   // return User::min('id');                                 //using model

   // if(DB::table('users')->where('id',1)->exists()){
   //    echo "user with id 1 exists";
   // }
   
   // if(DB::table('users')->where('id','12')->doesntExist()){
   //       echo "user with id 12 does not exists";
   // }

   // $users=DB::table('users')->select('name','id')->get();
   // return $users;
   // return User::select('name','id')->get();                                   //using model

   // $user=DB::table('users')->wherein('id',[1,7])->get();
   // return $user;
   
   // $user=DB::table('users')->whereNotin('id',[1,7])->get();
   // return $user;
   
   // $users=DB::table('users')->where('id',1)->orwhere('name','karan')->get();
   // return $users;
   
   // $users=DB::table('users')->whereColumn('updated_at','=','created_at')->get();
   // return $users;

   // $users=DB::table('users')->orderBy('name','asc')->get();
   // return $users;

   // $user=DB::table('users')->latest()->first();
   // return $user;

   // $user=DB::table('users')->inRandomOrder()->first();
   // return $user;

   // DB::table('users')->insert(
   //    ['name'=>'harshit','email'=>'harshit@gmail.com'],
   //    ['name'=>'kartik','email'=>'kartik@gmail.com'],
   // );
   // echo "data entered successfully";
   // $users=DB::table('users')->get();
   // return $users;

   // DB::table('users')->where('id',11)->update(['id'=>10]);
   // $users=DB::table('users')->get();
   // return $users;

   // DB::table('users')->where('id',10)->delete();
   // $users=DB::table('users')->get();
   // return $users;

   // $users= DB::select('select * from users');
   // return $users;
   }
}
