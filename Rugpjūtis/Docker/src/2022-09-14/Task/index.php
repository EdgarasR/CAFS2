<?php

require_once __DIR__ . '/handload.php';

$text = 'Hello World';

$host = 'smtp.gmail.com';
$port = 587;
$username = 'testtest@gmail.com';
$password = 'testtest';

$emailMessenger = new Services\Messengers\EmailMessengerService($host, $username, $password);
$emailMessenger->send('hello@nonamez.name', $text);

$smsMessager = new Services\Messengers\SmsMessengerService();
$smsMessager->send('+37061234567', $text);

$facebookAppName = 'test-name';
$facebookAppKey  = '';

$facebookConnector = new Connectors\FacebookConnector($facebookAppName, $facebookAppKey);

$facebookMessenger = new Services\Messengers\FacebookMessengerService($facebookConnector);
$facebookMessenger->send(4, $text);

