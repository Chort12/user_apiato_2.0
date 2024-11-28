<?php

namespace App\Filament\Resources\UsersResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateUsers extends CreateRecord
{
    protected static string $resource = UserResource::class;
}
