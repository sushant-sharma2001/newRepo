<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\Req_class;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/abc', function () {
//     return view('home');
// });


// route::redirect('/about','/welcome');



// Route::view('/another', 'home');

// Route::get('/about/{name}', function ($name) {
//     echo $name;
//     return view('about');
// });

// Route::get('/about/{name}', function ($name) {
//     echo $name;
//     return view('about', ['name' => $name]);
// });




//redirecting

// Route::get('/abc', function () {
//     return view('home');
// });
// Route::get('/testing', function () {
//     return view('testing');
// });

// route::redirect('/', '/testing');
// route::redirect('/abc', '/testing');




//controller calling with routes

// use App\Http\Controllers\First_Controller;

// Route::get('path',[First_Controller::class,'getUser']);

// Route::get('path1',[First_Controller::class,'greet']);

// Route::get('path3/{add}',[First_Controller::class,'getAddress']);

// Route::get('path4',[First_Controller::class,'view_page']);

// Route::get('path5/{data}',[First_Controller::class,'view_page1']);




//view calling with router
// Route::view('/','view1');
// Route::get('/abc/{data}',function($data){
//     return view('view1',['data'=>$data]);
// });




//view calling with cotroller
// use App\Http\Controllers\Controller1; 
// Route::get('/abc',[Controller1::class,'greet']);
// Route::get('/add/{c}',[Controller1::class,'user']);



//using blade extension
// use App\Http\Controllers\Controller2; 
// Route::get('/address',[Controller2::class,'user']);



//using subview
// Route::view('/','subview1');


//view form
// use App\Http\Controllers\Controller_form;
// Route::view('/form','view-form');
// Route::post('adduser',[Controller_form::class,'addUser']);


//URL generation
// Route::view('/home','home1');
// Route::view('/about','about1');



//route group
// use App\Http\Controllers\routeGroup;
// Route::prefix('route')->group(function(){
//     Route::view('/','routeGroup');
//     Route::get('/first',[routeGroup::class,'first']);
//     Route::get('/second',[routeGroup::class,'second']);
// });


//middleware 
// Route::view('/','middleware');
// use App\Http\Middleware\Countrycheck;
// Route::view('/','home')->middleware(Countrycheck::class);
// Route::view('/','home')->middleware('check1');
// Route::view('/about','about2')->middleware('check1');
// Route::view('/','home')->middleware('check1');


//connecting to database
// use App\Http\Controllers\Database;
// Route::get('/',[Database::class,'data']);
// use App\Http\Controllers\Database;
// Route::view('/','database');  
// Route::get('/',[Database::class,'data']);
// use App\Http\Controllers\Database2;
// Route::get('/',[Database2::class,'get']);



//http client
// use App\Http\Controllers\httpClient;
// Route::get('/',[httpClient::class,'get']);


//adding data to table
// use App\Http\Controllers\Database3;
// Route::view('/add','add-student');
// Route::post('/add',[Database3::class,'add']);
// Route::view('/list','list-student');
// Route::get('/list',[Database3::class,'get']);


//http request class
// use App\Http\Controllers\Request_class;
// Route::view('/', 'request-class');
// Route::post('/path',[Request_class::class, 'fetch']);


//env
// Route::view('/','retrieveEnv');


//sessions
use App\Http\Controllers\SessionTestController;
Route::get('/session/index',[SessionTestController::class,'index'])->name('ind');
Route::get('/session/store',[SessionTestController::class,'store']);
Route::get('/session/delete',[SessionTestController::class,'destroy']);


//authentication
use App\Http\Controllers\AuthController;
use App\Http\Middleware\ValidUser;

Route::get('/login', function () {
    return view('authLoginView');
})->name('login');
Route::get('/register', [AuthController::class, 'registerPage'])->name('registerPage');
Route::post('/auth/register', [AuthController::class, 'register'])->name('register');
Route::post('/auth/login/check', [AuthController::class, 'loginCheck'])->name('loginCheck');
Route::get('/auth/dashboard', [AuthController::class, 'dashboard'])->name('dashboard')->middleware(ValidUser::class);
Route::get('/auth/logout', [AuthController::class, 'logout'])->name('logout');




