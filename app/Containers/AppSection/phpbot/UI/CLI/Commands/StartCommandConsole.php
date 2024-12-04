<?php

namespace App\Containers\AppSection\phpbot\UI\CLI\Commands;

use App\Containers\AppSection\phpbot\Commands\StartCommand;
use App\Ship\Parents\Commands\ConsoleCommand;
use App\Ship\Parents\Exceptions\Exception;
use Telegram\Bot\Laravel\Facades\Telegram;

class StartCommandConsole extends ConsoleCommand
{

    protected $signature = 'bot:send';

    public function handle(): void
    {
        $chatId = 6525271119;
            $this->line('Message send to ' . $chatId);
            Telegram::bot('mybot')->sendMessage([
                'chat_id' => $chatId,
                'text' => 'Hey, there! Welcome to our bot!',
            ]);
    }
}