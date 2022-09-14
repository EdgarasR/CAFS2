<?php

namespace Services\Messengers;

interface Messenger
{
    public function send(string $receiver, string $text): string;
}