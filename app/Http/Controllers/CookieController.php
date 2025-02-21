<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;

class CookieController extends Controller
{
    function setCookie(){
      $color='blue';
      $expireTime=1;
      return response('cookie set')->cookie('favorite-color',$color,$expireTime);
    }

    function getCookie(Request $request){
     $color=$request->cookie('favorite-color');
     return response()->json([
        'color'=>$color??'cookie not set'
     ]);
    }
}
