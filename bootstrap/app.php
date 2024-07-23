<?php

use Application\Dto\Identifier;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;
use Ui\Console\Commands\Modules\TestCommand;

return Application::configure(dirname(__DIR__))
    ->withRouting(
        using: static function() {
            //Route::middleware('api')->prefix(v1)
            Route::prefix('v1')
                ->group(base_path('app/Ui/Api/V1/routes/main.php'));
        },
    )
    ->withCommands([
        TestCommand::class
    ])
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
    })
    ->create();
