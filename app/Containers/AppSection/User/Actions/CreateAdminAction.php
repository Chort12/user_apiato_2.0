<?php
//
//namespace App\Containers\AppSection\User\Actions;
//
//use App\Containers\AppSection\Authorization\Tasks\FindRoleTask;
//use App\Containers\AppSection\User\Models\User;
//use App\Containers\AppSection\User\Tasks\CreateUserTask;
//use App\Ship\Exceptions\CreateResourceFailedException;
//use App\Ship\Exceptions\NotFoundException;
//use App\Ship\Parents\Actions\Action as ParentAction;
//use Illuminate\Support\Facades\DB;
//
//class CreateAdminAction extends ParentAction
//{
//    public function __construct(
//        private readonly CreateUserTask $createUserTask,
//        private readonly FindRoleTask $findRoleTask,
//    ) {
//    }
//
//    /**
//     * @throws CreateResourceFailedException
//     * @throws \Throwable
//     * @throws NotFoundException
//     */
//    public function run(array $data): User
//    {
//        return DB::transaction(function () use ($data) {
//            $user = $this->createUserTask->run($data);
//            $adminRoleName = config('appSection-authorization.admin_role');
//            foreach (array_keys(config('auth.guards')) as $guardName) {
//                $adminRole = $this->findRoleTask->run($adminRoleName, $guardName);
//                $user->assignRole($adminRole);
//            }
//            $user->email_verified_at = now();
//            $user->save();
//
//            return $user;
//        });
//    }
//}


namespace App\Containers\AppSection\User\Actions;

use App\Containers\AppSection\Authorization\Tasks\AssignUserToRoleTask;
use App\Containers\AppSection\User\Models\User;
use App\Containers\AppSection\User\Tasks\CreateUserByCredentialsTask;
use App\Containers\AppSection\User\UI\API\Requests\CreateAdminRequest;
use App\Ship\Parents\Actions\Action;

class CreateAdminAction extends Action
{
//    public function run(CreateAdminRequest $request): User
//    {
//        $admin = app(CreateUserByCredentialsTask::class)->run(
//            true,
//            $request->email,
//            $request->password,
//            $request->f_name,
//            $request->l_name,
//            $request->m_name,
//            $request->birthday
//        );
//
//        // NOTE: if not using a single general role for all Admins, comment out that line below. And assign Roles
//        // to your users manually. (To list admins in your dashboard look for users with `is_admin=true`).
//        app(AssignUserToRoleTask::class)->run($admin, ['admin']);
//
//        return $admin;
//    }
}
