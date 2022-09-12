<?php

class Programmer extends Person
{
    function __construct(string $name)
    {
        parent::__construct($name);
    }

    public function greetings(): string
    {
        return sprintf("Hello world! I'm %s.", $this->name);
    }
}