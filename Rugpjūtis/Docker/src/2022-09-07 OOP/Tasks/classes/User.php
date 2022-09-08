<?php

class User
{
    public string $name;
    public string $age;

    function __construct(string $name, string $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    public function getName() : string
    {
        return $this->name;
    }
    public function getAge() : string
    {
        return $this->age;
    }
    public function setName(string $name) : void
    {
        $this->name = $name;
    }
    public function setAge(string $age) : void
    {
        $this->age = $age;
    }
}