<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exceptions\CustomException;

class ExceptionController extends Controller
{
   public function index($id){
        try{
        if($id<=0 || $id>=18){
           throw new CustomException('invalid id provided',400);
        }
        }
        // catch (CustomException $e) {
        //     // return  $e->getMessage() . ' (Code: ' . $e->getCode() . ')';
        // }


        catch(CustomException $e){
            // report($e);
            // render($e);
            // echo $e->getMessage();
            // echo $e->getCode();
    
        }
    }
}
