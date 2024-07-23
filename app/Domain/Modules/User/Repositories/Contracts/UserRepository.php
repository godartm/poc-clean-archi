<?php

namespace App\Domain\Modules\User\Repositories\Contracts;

use App\Domain\Base\Repository\Repository;
use App\Infrastructure\Builders\Modules\User\UserBuilder;
use Infrastructure\Models\User;

/**
 * @extends Repository<User, UserBuilder>
 */
interface UserRepository extends Repository
{
    public function getByEmail(string $email): ?User;
    public function uodateByToken(string $token): ?User;
}
