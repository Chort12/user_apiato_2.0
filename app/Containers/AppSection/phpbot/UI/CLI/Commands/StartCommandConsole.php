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
        $chat_id = 6525271119;
        try {
            $this->line('Message send to ' . $chat_id);
            $response = Telegram::bot('mybot')->sendMessage([
                'chat_id' => $chat_id,
                'text' => 'Hey, there! Welcome to our bot!',
            ]);
        } catch (Exception $e) {
        };
    }
}