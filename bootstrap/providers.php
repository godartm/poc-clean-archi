<?php

use App\Application\Providers\RoutingServiceProvider;
use App\Domain\Modules\User\Providers\UserRespositoryServiceProvider;
use Application\Providers\AppServiceProvider;

return [
    AppServiceProvider::class,
    RoutingServiceProvider::class,
    UserRespositoryServiceProvider::class
];
