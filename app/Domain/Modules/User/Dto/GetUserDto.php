<?php

namespace App\Domain\Modules\User\Dto;

use Application\Dto\Identifier;

final readonly class GetUserDto
{

    public function __construct(public Identifier $id)
    {
    }

}
