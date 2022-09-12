<?php

class Teacher extends Person
{
    function __construct(string $name)
    {
        parent::__construct($name);
    }

    public function greetings(): string
    {
        return sprintf("Hello students, I'm %s.", $this->name);
    }
}