<?php

namespace Database\Seeders;

use Apiato\Core\Loaders\SeederLoaderTrait;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Containers\AppSection\User\Data\Seeders\UserSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use SeederLoaderTrait;

    public function run(): void
    {
//        $this->runLoadingSeeders();
        $this->call(
            UserSeeder::class
        );
    }
}
