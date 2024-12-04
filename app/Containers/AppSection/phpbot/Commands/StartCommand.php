<?php

namespace App\Containers\AppSection\phpbot\Commands;

use App\Ship\Parents\Commands\ConsoleCommand;
use http\Message;
use Telegram\Bot\Api;
use Telegram\Bot\Commands\Command;
use Telegram\Bot\Laravel\Facades\Telegram;
use Telegram\Bot\Methods\Commands;

class StartCommand extends Command
{
    protected string $name = 'start';
    protected string $description = 'Start Command to get you started';

    public function handle(): void
    {
        $response = Telegram::bot('mybot')->sendMessage([
            'chat_id' => 6525271119,
            'text' => 'Hey, there! Welcome to our bot!',
        ]);
    }
}
