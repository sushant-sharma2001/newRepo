<?php
namespace App\Facades;
use Illuminate\Support\Facades\Facade;

class TestServiceFacade1 extends Facade
{
    protected static function getFacadeAccessor()
    {
         return 'App\Services\TestService1';
    }
}