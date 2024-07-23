<?php

namespace App\Domain\Modules\User\Repositories;

use App\Domain\Base\Repository\BaseRepository;
use App\Domain\Modules\User\Repositories\Contracts\UserRepository as UserRepositoryContract;
use App\Infrastructure\Builders\Modules\User\UserBuilder;
use Infrastructure\Models\User;

class UserRepository extends BaseRepository implements UserRepositoryContract
{
    /**
     * @return UserBuilder<User>
     */
    public function query(): UserBuilder
    {
        return User::query();
    }
}
