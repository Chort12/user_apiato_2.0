<?php

namespace App\Containers\AppSection\User\UI\WEB\Controllers;

use App\Containers\AppSection\User\Actions\FindUserByIdAction;
use App\Containers\AppSection\User\Data\Repositories\UserRepository;
use App\Containers\AppSection\User\Models\User;
use App\Containers\AppSection\User\UI\WEB\Requests\FindUserByIdRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\WebController;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ShowController extends WebController
{
    public function show(User $user): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('appSection@user::show', compact('user'));
    }
}
