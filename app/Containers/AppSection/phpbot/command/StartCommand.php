<?php

namespace App\Containers\AppSection\phpbot\command;

use Telegram\Bot\Commands\Command;


class StartCommand extends Command
{
    protected string $name = "start";
    protected string $description = "Запуск / Перезапуск бота";

    public function handle()
    {
        dd($this);
    }
}