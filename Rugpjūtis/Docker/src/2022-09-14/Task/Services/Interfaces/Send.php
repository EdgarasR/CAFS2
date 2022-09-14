<?php

namespace Services\Messengers;

interface Send
{
    public function send(string $receiver, string $text);
}