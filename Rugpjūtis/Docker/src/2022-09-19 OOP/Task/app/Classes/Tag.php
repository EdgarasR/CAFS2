<?php

namespace App\Classes;
use App\Traits\Methods;

class Tag
{
    use Methods;

    function __construct(private string $tagName)
    {
        $this->tagName = $tagName;
    }

    public function get(): string
    {
        return sprintf('<%s %s="%s">%s</%s>', $this->tagName, $this->attribute, $this->value, $this->text, $this->tagName);
    }

    public function show(): string
    {
        return htmlentities(sprintf('<%s %s="%s">%s</%s>', $this->tagName, $this->attribute, $this->value, $this->text, $this->tagName));
    }
}