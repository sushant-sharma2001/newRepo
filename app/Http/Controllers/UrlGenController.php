<?php

namespace App\Http\Controllers;

Use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;

class UrlGenController extends Controller
{
    function show()
    {
        // return url('/search',['query'=>'laravel','page'=>2]);
        // return url()->query('/search',['query'=>'laravel','page'=>2]);
        
        // $url= url()->query('/search', ['catagories' => ['type'=>'electronics', 'brand'=>'samsung'],'price'=>['min'=>100,'max'=>1000]]);
        // echo "$url<br>";
        // echo urldecode($url);

        // echo url()->current();
        // echo"<br>";
        // echo url()->previous();
        // echo"<br>";
        // echo url()->previousPath();
        // echo"<br>";
        // echo url()->full();
        // echo URL::current();

        // echo route('test.show');
        // echo route('path.show',['id'=>$id]);
    }
}
