<?php

namespace App\Containers\AppSection\phpbot\Commands;

use Telegram\Bot\Api;
use Telegram\Bot\Commands\Command;
use Telegram\Bot\Laravel\Facades\Telegram;

class StartCommand extends Command
{
    protected string $name = 'start';
    protected string $description = 'Start Command to get you started';

    public function handle(): void
    {
        $this->replyWithMessage([
            'chat_id'=>'6525271119',
            'text' => 'Hey, there! Welcome to our bot!',
        ]);
//        $telegram = Telegram::bot('mybot')->getMe();
//
//        $response = $telegram->sendMessage([
//            'chat_id'=>'6525271119',
//            'text'=>'Hi'
//        ]);
    }
}