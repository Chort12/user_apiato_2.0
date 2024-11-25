<?php

use App\Containers\AppSection\User\UI\WEB\Controllers\CreateController;
use Illuminate\Support\Facades\Route;

Route::get('user', [CreateController::class, 'create'])->name('create');
//    ->middleware(['auth:web']);

