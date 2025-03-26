<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class PaginationController extends Controller
{
    function show(){
        // $users=DB::table('users')->simplePaginate(15);
        // $users=DB::table('users')->paginate(15);
        $users = DB::table('users')->orderBy('id')->cursorPaginate(15);
        return view('pagination-view',['users'=>$users]);
    }
}
