<?php

namespace App\Containers\AppSection\User\Data\Seeders;

use App\Containers\AppSection\User\Models\User;
use App\Ship\Parents\Seeders\Seeder as ParentSeeder;

class UserSeeder extends ParentSeeder
{
    public function run(): void
    {
        User::factory(20)->create();
    }
}
