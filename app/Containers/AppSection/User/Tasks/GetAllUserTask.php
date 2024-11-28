<?php

namespace App\Containers\AppSection\User\Tasks;

//use App\Containers\AppSection\User\Data\Criterias\AdminsCriteria;
//use App\Containers\AppSection\User\Data\Criterias\ClientsCriteria;
//use App\Containers\AppSection\User\Data\Criterias\RoleCriteria;
use App\Containers\AppSection\User\Data\Repositories\UserRepository;
use App\Ship\Criterias\OrderByCreationDateDescendingCriteria;
use App\Ship\Parents\Tasks\Task;

class GetAllUserTask extends Task
{
    public function __construct(private readonly UserRepository $repository)
    {
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
