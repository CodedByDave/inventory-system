<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Auth\Middleware\Authenticate as AuthMiddleware;
use App\Http\Middleware\RoleMiddleware;
use App\Exceptions\Handler;
use Illuminate\Contracts\Debug\ExceptionHandler;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        api: __DIR__ . '/../routes/api.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'auth' => AuthMiddleware::class,  // <-- register auth middleware
            'role' => RoleMiddleware::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        $exceptions->report(function (Throwable $e) {
            // log custom stuff
        });
    })
    ->withBindings([
        ExceptionHandler::class => Handler::class,
    ])
    ->create();
