<?php

use App\Containers\AppSection\User\UI\WEB\Controllers;

use App\Containers\AppSection\User\UI\WEB\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use Telegram\Bot\Commands\HelpCommand;

//Route::get('users', [IndexController::class, 'index'])
//    ->name('index');

Route::get('bot', [\App\Containers\AppSection\phpbot\Commands\StartCommand::class, 'handle']);
//Route::get('bot', [HelpCommand::class, 'handle']);
//    ->middleware(['auth:web']);

