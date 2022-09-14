<?php

namespace Services\Messengers;

class EmailMessengerService implements Send
{
    function __construct(private string $host, private string $username, private string $password)
    {
        $this->setHost($host);
        $this->setUsername($username);
        $this->setPassword($password);
    }

    public function setHost(string $host): void
    {
        $this->host = $host;
    }

    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function send(string $receiver, string $text): string
    {
        return sprintf("Message \"%s\" sent to %s <br>", $text, $receiver);
    }
}