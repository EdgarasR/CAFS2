<?php

namespace Services\Messengers;

class SmsMessengerService implements Send
{
    public function send($receiver, $text)
    {
        echo sprintf("Message \"%s\" sent to %s", $text, $receiver);
    }
}