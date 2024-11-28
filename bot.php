<?php

use Telegram\Bot\Laravel\Facades\Telegram;

require 'vendor/autoload.php';

//use Longman\TelegramBot\Telegram;
//use Longman\TelegramBot\Exception\TelegramException;

// Ваш токен и имя пользователя
$apiKey = '7444180446:AAFlZkdY11a3TeJhJbpvaXeFqk0t-4ID5SQ';
$botUsername = 'https://t.me/ApiatoUser_bot';

try {
    $telegram = new Telegram($apiKey, $botUsername);

    $result = $telegram->setWebhook('http://127.0.0.1:8000');

    if ($result->isOk()) {
        echo 'Webhook установлен: ' . $result->getDescription();
    } else {
        echo 'Ошибка установки вебхука: ' . $result->getDescription();
    }
} catch (TelegramException $e) {
    echo $e->getMessage();
}