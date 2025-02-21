<?php
namespace App\Facades;
use Illuminate\Support\Facades\Facade;

class UserServiceFacade extends Facade
{
    protected function getFacadeAccessor()
    {
         return 'App\Services\UserService';
    }
}