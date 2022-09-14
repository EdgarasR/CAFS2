<?php

namespace Services\Messengers;

use Connectors\FacebookConnector;

class FacebookMessengerService implements Messenger
{
    function __construct(private FacebookConnector $connector)
    {
        $this->setConnector($connector);
    }

    public function setConnector($connector): void
    {
        $this->connector = $connector;
    }

    public function send(string $receiver, string $text): string
    {
        return sprintf("Message \"%s\" sent to %s <br>", $text, $receiver);
    }
}
