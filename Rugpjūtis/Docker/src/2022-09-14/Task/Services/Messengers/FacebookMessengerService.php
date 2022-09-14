<?php

namespace Services\Messengers;

use Connectors\FacebookConnector;

class FacebookMessengerService implements Send
{
    function __construct(private FacebookConnector $connector)
    {
        $this->setConnector($connector);
    }

    public function setConnector($connector): void
    {
        $this->connector = $connector;
    }

    public function send($receiver, $text): string
    {
        return sprintf("Message \"%s\" sent to %s", $text, $receiver);
    }
}
