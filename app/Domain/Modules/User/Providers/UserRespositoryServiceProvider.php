<?php

namespace App\Domain\Modules\User\Providers;

use App\Domain\Modules\User\Repositories\Contracts\UserRepository as UserRepositoryContract;
use App\Domain\Modules\User\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;

class UserRespositoryServiceProvider extends ServiceProvider
{

    /**
     * @var array|class-string[]
     */
    public array $bindings = [
        UserRepositoryContract::class => UserRepository::class
    ];
}
