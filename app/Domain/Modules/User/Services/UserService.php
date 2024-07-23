<?php

namespace App\Domain\Modules\User\Services;

use App\Domain\Base\Aggregate\Aggregate;
use App\Domain\Modules\User\Dto\GetUserDto;
use App\Domain\Modules\User\Repositories\Contracts\UserRepository;
use Domain\Modules\User\Aggregates\UserAggregate;
use Exception;
use Infrastructure\Models\User;

class UserService
{

    public function __construct(private readonly UserRepository $userRepository)
    {
    }

    public function getUserById(GetUserDto $getUserDto): UserAggregate {
        // Dans l'idéal il aurait fallut que le repository me retourne directement un aggregat de mon model scopé à mon domain
        $user = $this->userRepository->find($getUserDto->id->value);

        return $user instanceof User
            ? new UserAggregate($user)
            : throw new Exception();
    }


    public function update(): void {

        $user = $this->userRepository->find(2);

        if(! $user instanceof User) {
            throw new Exception();
        }

        $userAggregate = new UserAggregate($user);
        $userAggregate->updateName('Dany Bitard');

        $this->userRepository->update($userAggregate->getRoot());
    }

}
