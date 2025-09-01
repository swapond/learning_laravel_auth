<?php

use App\Http\Middleware\TestUser;
use App\Http\Middleware\ValidUser;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        // group middleware
        $middleware->appendToGroup('ok-user', [
            // Middleware::class,
            // you can add multiple middleware here
        ]);
        // global middleware
//        $middleware->append(Middleware::class);
        // for using multiple middleware as global middleware then
//        $middleware->use([$middleware,]);

        // include the middleware class in short name
        $middleware->alias([
            'isValidUser' => ValidUser::class,
            'testUser' => TestUser::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
