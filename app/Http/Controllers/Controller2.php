<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller2 extends Controller
{
    function user(){
        $data=1234;
        $arr=[1,2,3,4,5];
        $str=['amit','ankit','akhil','sumit','rohit'];
        $assoc=['name'=>'amit','age'=>21,'address'=>'shimla'];
        return view('view2',['data'=>$data,'array'=>$arr,'string'=>$str,'associative'=>$assoc]);
    }
}
