<?php

include ('vendor/autoload.php');

include ('TelegramBot.php');
// Получение сообщения
$telegramApi = new TelegramBot();

$updates = $telegramApi->getUpdates();


print_r($updates);

// По каждому сообщению пробегаемся

// На каждое сообщение отвечаем привет