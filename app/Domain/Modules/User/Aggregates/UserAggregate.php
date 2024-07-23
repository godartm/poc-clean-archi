<?php

namespace Domain\Modules\User\Aggregates;

use App\Domain\Base\Aggregate\Aggregate;
use Infrastructure\Models\User;

class UserAggregate implements Aggregate
{

    public function __construct(private User $root)
    {
    }

    public function getRoot(): User {
        return $this->root;
    }

    public function updateName(string $name): void {
        $this->root->name = $name;
    }

    public function updateEmail(string $email): void {
        $this->root->email = $email;
    }
}
