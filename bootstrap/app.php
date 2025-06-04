<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use \App\Http\Middleware\CheckRoleMiddleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
        'admin' => \App\Http\Middleware\AdminMiddleware::class,
        'role' => CheckRoleMiddleware::class,
        // 'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class
        ]);
    })->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
