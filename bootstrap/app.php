<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\first;
use App\Http\Middleware\Agecheck;
use App\Http\Middleware\Countrycheck;
use App\Http\Middleware\EnsureValidToken;

use Illuminate\Support\Facades\Route;


return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',                            //uncomment to use web.php
        commands: __DIR__.'/../routes/console.php',
        health: '/up',

    //     web: __DIR__.'/../routes/practiseRoutes.php',
    //     commands: __DIR__.'/../routes/console.php',                       //comment this to use original route file
    //     health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // $middleware->append(first::class);
        // $middleware->appendToGroup('check1',[
        //     Agecheck::class,
        //     Countrycheck::class
        // ]);
        // $middleware->append(EnsureValidToken::class);
        // $middleware->appendToGroup('check',[
        //    EnsureValidToken::class
        // ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
