<?php
use Illuminate\Support\Facades\Route;

Route::get('/greet',function(){
    return 'hello world';
});

Route::redirect('/here','/there');
Route::redirect('/there','/where');

Route::view('/welcome','/welcome',['name'=>'abc']);

Route::get('/id/{id}',function(string $id){
    return $id;
});

Route::get('/posts/{post}/comments/{comment}', function (string $postId, string $commentId) {
    return "$postId and $commentId";
});


//named routes
Route::get('/user/profile',function(){
    return "this is user profile";
})->name('pf');
// $url=route('pf');
// return redirect()->$url;                   //functions inside controller 
// return to_route('pf');
Route::view('/user/about/page','about2')->name('abt');
Route::view('/link','namedRoute');
use App\Http\Controllers\NamedRoutes;
use App\Http\Controllers\ResponseController;

Route::get('/show',[NamedRoutes::class,'disp']);


//group routes //with prefix
use App\Http\Controllers\RouteGroup;

Route::view('/student', 'routeGroup');

Route::prefix('student')->group(function() {
    Route::get('name', [RouteGroup::class, 'first']);
    Route::get('age', [RouteGroup::class, 'second']);
    Route::get('address', [RouteGroup::class, 'third']);
});


//group routes //with controller
use App\Http\Controllers\RouteGroups;
Route::controller(RouteGroups::class)->group(function(){

    Route::get('/name','first');
    Route::get('/age','second');
    Route::get('/address','third');
    Route::get('/data/{value}','fetch');

});


//middleware with routes
use App\Http\Middleware\EnsureValidToken;
Route::view('/about','about2')->middleware(EnsureValidToken::class);
Route::get('/age',[RouteGroup::class,'second'])->middleware(EnsureValidToken::class);
Route::get('/home1', function () {
    return view('home1');
});
Route::middleware('check')->group(function(){
    Route::view('/about','about2');
    Route::view('/path1','view1');
    Route::view('/path2','view2');   
});


//csrf token
use Illuminate\Http\Request;
Route::get('/token',function(Request $request){
// $token=$request->session()->token();
// return $token;
$token=csrf_token();
return $token;
});



//controllers
use App\Http\Controllers\UserController;
Route::get('/user/{id}',[UserController::class,'show']);

//service controller
use App\Http\Controllers\ServiceController;
Route::view('/','serviceView');
Route::post('/check',[ServiceController::class,'show']);

//service controller second
use App\Http\Controllers\ServiceController1;
Route::view('/form','serviceView1');
Route::post('/students',[ServiceController1::class,'show']);


//creating responses
Route::get('/',function(){
    return "hello world";
}); 
Route::get('/',function(){
    return [1,2,3];
});
Route::get('/',function(){
    return response('hello world')->header('content-type','text/plain');
});

Route::get('/go/{id}',[ResponseController::class,'show']);


//cookie controlling
use App\Http\Controllers\CookieController;
use App\Http\Controllers\UrlGenController;

Route::view('/','cookieView');
Route::get('/setcolor',[CookieController::class,'setCookie']);
Route::get('/getcolor',[CookieController::class,'getCookie']);

//url generation
Route::get('/',[UrlGenController::class,'show']);
Route::get('/path/to/test/here',[UrlGenController::class,'show'])->name('test.show');
Route::get('/path/{id}',[UrlGenController::class,'show'])->name('path.show');


//user service-facade
use App\Http\Controllers\User_Controller;
Route::view('/','user-profile');
Route::get('/user/{id}',[User_Controller::class,'show']);




