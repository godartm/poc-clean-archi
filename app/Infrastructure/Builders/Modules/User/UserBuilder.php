<?php

namespace App\Infrastructure\Builders\Modules\User;

use Illuminate\Database\Eloquent\Builder;
use Infrastructure\Models\User;

/**
 * @template TModelClass of User
 *
 * @extends Builder<TModelClass>
 */
class UserBuilder extends Builder
{
}
