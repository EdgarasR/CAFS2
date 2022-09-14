<?php

namespace Services\Messengers;

class SmsMessengerService implements Messenger
{
    public function send(string $receiver, string $text): string
    {
        return sprintf("Message \"%s\" sent to %s <br>", $text, $receiver);
    }
}