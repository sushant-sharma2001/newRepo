<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Database extends Controller
{
    function data(){
        $data= DB::select('select * from users');
        return view('database',['users'=>$data]);
    }
}
