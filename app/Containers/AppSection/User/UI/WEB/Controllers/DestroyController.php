<?php

namespace App\Containers\AppSection\User\UI\WEB\Controllers;

use App\Containers\AppSection\User\Actions\DeleteUserAction;
use App\Containers\AppSection\User\Models\User;
use App\Containers\AppSection\User\Tasks\FindUserByIdTask;
use App\Containers\AppSection\User\UI\API\Requests\DeleteUserRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\WebController;

class DestroyController extends WebController
{
    public function destroy(DeleteUserRequest $request, string $user): \Illuminate\Http\RedirectResponse
    {
            app(DeleteUserAction::class)->run($user);
            return redirect()->route('index');
    }
}
