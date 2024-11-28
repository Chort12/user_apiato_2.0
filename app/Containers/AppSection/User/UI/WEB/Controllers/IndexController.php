<?php

namespace App\Containers\AppSection\User\UI\WEB\Controllers;

use App\Containers\AppSection\User\Actions\GetAllUsersAction;
use App\Containers\AppSection\User\Models\User;
use App\Ship\Parents\Controllers\WebController;

class IndexController extends WebController
{
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $users = app(GetAllUsersAction::class)->run();
        return view('appSection@user::index', compact('users'));
    }
}
