<?php

use Telegram\Bot\Laravel\Facades\Telegram;

require 'vendor/autoload.php';

$apiKey = '7444180446:AAFlZkdY11a3TeJhJbpvaXeFqk0t-4ID5SQ';
$botUsername = 'https://t.me/ApiatoUser_bot';

$telegram = new Telegram($apiKey, $botUsername);

$telegram->handle();