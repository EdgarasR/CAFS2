<?php

abstract class Person
{
    function __construct(string $name)
    {
        $this->name = $name;
    }
    abstract public function greetings(): string; 
}