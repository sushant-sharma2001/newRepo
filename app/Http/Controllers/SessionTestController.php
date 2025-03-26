<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionTestController extends Controller
{

    public function index()
    {
        // return session()->all();
        // $value=session('type');
        $values=session()->all();
        return view('sessionView',compact('values'));
    }

    public function store(Request $request)
    {
        session(['name'=>'user session']);
        // echo session('name');
        // echo "<br>";
        // echo session()->get('type');

        session()->put('type','string type');
        
        $request->session()->put('first_key','first_value');

        session([
                  'second_key'=>"second_value",
                  'third_key'=>'third_value'
               ]);

        session()->regenerate(); 
        
        session()->flash('status','sessions stored successfully..!!');
       
        // return redirect('/session/index');
        return redirect()->route('ind');
        // return $this->index();
    }

    public function destroy()
    {
    //    session()->forget('name');
    //    session()->forget(['name','type']);
    //    session()->flush();
       session()->invalidate();

       return redirect()->route('ind');
    //    return $this->index();
    }
}
