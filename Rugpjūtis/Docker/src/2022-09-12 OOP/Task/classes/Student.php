<?php

class Student extends Person
{
    function __construct(string $name)
    {
        parent::__construct($name);
    }

    public function greetings(): string
    {
        return sprintf("Hello, i'm %s.", $this->name);
    }
}