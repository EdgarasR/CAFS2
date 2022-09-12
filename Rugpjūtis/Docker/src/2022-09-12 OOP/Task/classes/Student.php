<?php

class Student extends Person
{
    public function greetings(): string
    {
        return sprintf("Hello, i'm %s.", $this->getName());
    }
}