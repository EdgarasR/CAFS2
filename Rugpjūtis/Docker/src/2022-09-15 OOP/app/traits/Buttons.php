<?php

namespace App\traits;

trait Buttons
{
    public function open(string $action,string $method): string
    {
        return sprintf("<form action=\"%s\" method=\"%s\">", $action, $method);
    }

    public function submit(): string
    {
        if(empty($text))
        {
            $text = 'Submit';
        }
        return "<button class=\"btn btn-success mt-2\">$text</button>";
    }

    public function close(): string
    {
        return "</form>";
    }
}