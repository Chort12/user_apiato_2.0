<?php

namespace App\Containers\AppSection\User\UI\WEB\Controllers;

use App\Containers\AppSection\User\Models\User;
use App\Containers\AppSection\User\UI\WEB\Requests\FindUserByIdRequest;
use App\Ship\Parents\Controllers\WebController;

class EditController extends WebController
{
    public function edit(User $user): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('appSection@user::edit', compact('user'));
    }
}
