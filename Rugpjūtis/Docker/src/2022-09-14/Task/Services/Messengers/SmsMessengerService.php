<?php

namespace Services\Messengers;

class SmsMessengerService implements Send
{
    public function send(string $receiver, string $text)
    {
        return sprintf("Message \"%s\" sent to %s <br>", $text, $receiver);
    }
}