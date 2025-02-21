<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class httpClient extends Controller
{
    function get(){
        $response=Http::get('https://jsonplaceholder.typicode.com/users/1');
        $response= $response->body();
        return view('httpclient',['data'=>json_decode($response)]);
    }
}
