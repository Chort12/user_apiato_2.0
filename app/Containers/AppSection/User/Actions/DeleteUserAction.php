<?php

namespace App\Containers\AppSection\User\Actions;

use App\Containers\AppSection\Authentication\Tasks\GetAuthenticatedUserTask;
use App\Containers\AppSection\User\Models\User;
use App\Containers\AppSection\User\Tasks\DeleteUserTask;
use App\Containers\AppSection\User\Tasks\FindUserByIdTask;
use App\Containers\AppSection\User\UI\API\Requests\DeleteUserRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action;

class DeleteUserAction extends Action
{
    public function run(string $user)
    {
        app(DeleteUserTask::class)->run($user);
    }
}
