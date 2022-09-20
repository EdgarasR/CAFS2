<?php

namespace App\Classes;
use App\Traits\Methods;

class Tag
{
    private $tagName;
    private $attr;
    private $text;

    use Methods;

    function __construct(string $tagName)
    {
        $this->tagName = $tagName;
    }

    public function get(): string
    {
        return sprintf('<%s %s>%s</%s>', $this->tagName, $this->attr, $this->text, $this->tagName);
    }

    public function show(): string
    {
        return htmlentities(sprintf('<%s %s>%s</%s>', $this->tagName, $this->attr, $this->text, $this->tagName));
    }
}