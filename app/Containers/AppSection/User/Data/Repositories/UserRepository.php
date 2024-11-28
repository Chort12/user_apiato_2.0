<?php

namespace App\Containers\AppSection\User\Data\Repositories;

use App\Containers\AppSection\User\Models\User;
use App\Ship\Parents\Repositories\Repository as ParentRepository;

/**
 * @template TModel of User
 *
 * @extends ParentRepository<TModel>
 */
class UserRepository extends ParentRepository
{
    protected $fieldSearchable = [
        'id' => '=',
        'f_name' => 'like',
        'l_name' => 'like',
        "m_name" => "like",
        'birthday' => '=',
        'email' => '=',
    ];

    public function model(): string
    {
        return config('auth.providers.users.model');
    }
}
