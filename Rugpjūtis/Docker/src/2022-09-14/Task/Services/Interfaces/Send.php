<?php

namespace Services\Messengers;

interface Send
{
    public function send($receiver, $text): string;
}