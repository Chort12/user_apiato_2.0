<?php

//use App\Containers\AppSection\Phpbot\UI\WEB\Controllers\HandleController;
use Illuminate\Support\Facades\Route;

Route::get('bot', [\App\Containers\AppSection\phpbot\Commands\StartCommand::class, 'handle']);
//    ->middleware(['auth:web']);

