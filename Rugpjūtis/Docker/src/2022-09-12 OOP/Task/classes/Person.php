<?php

abstract class Person
{
    function __construct(private string $name)
    {
        $this->setName($name);
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    abstract public function greetings(): string; 
}