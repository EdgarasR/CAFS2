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


    // su sprintf nepavyko
    public function show()
    {
        print "<{$this->tagName} {$this->attribute}='{$this->value}''>{$this->text}</{$this->tagName}>";
    }

    public function get()
    {
        return "<{$this->tagName} {$this->attribute}='{$this->value}'>{$this->text}</{$this->tagName}>";
    }
}