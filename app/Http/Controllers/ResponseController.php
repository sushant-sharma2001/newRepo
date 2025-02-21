<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResponseController extends Controller
{
    function show(Request $request, $id)
    {
        return response($request->id);
        // ->header('Content-Type', $id)
        // ->header('X-Header-One', 'Header Value')
        // ->header('X-Header-Two', 'Header Value');
    }
}
