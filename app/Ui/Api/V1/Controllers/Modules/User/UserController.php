<?php

namespace App\Ui\Api\V1\Controllers\Modules\User;

use App\Domain\Modules\User\Dto\GetUserDto;
use App\Domain\Modules\User\Services\UserService;
use Application\Dto\Identifier;
use Illuminate\Http\JsonResponse;
use Ui\Api\V1\Controllers\Controller;

class UserController extends Controller
{
    public function __construct(private readonly UserService $userService)
    {
    }

    public function show(Identifier $sid): JsonResponse {

        return new JsonResponse(
            $this
                ->userService
                ->getUserById(new GetUserDto($sid))
                ->getRoot()
                ->getRoot()
        );
    }

    public function update(Identifier $id): JsonResponse {

        $this
            ->userService
            ->update();

        return new JsonResponse(
            $this
                ->userService
                ->getUserById(new GetUserDto($id))
                ->getRoot()
        );
    }


}
