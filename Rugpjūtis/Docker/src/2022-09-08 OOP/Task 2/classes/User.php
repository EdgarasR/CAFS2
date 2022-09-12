<?php

class User 
{
    public function __construct(protected string $name, protected int $age)
    {
        $this->setName($name);
        $this->setAge($age);
    }

    public function setName(string $name) : void
    {
        $this->name = $name;
    }

    public function getName() : string
    {
        return $this->name;
    }
    
    public function setAge(int $age) : void
    {
        $this->age = $age;
    }

    public function getAge() : int
    {
        return $this->age;
    }
}