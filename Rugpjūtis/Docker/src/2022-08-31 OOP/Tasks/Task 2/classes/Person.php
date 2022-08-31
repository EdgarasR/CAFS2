<?php

class Person
{
    public $firstName;
    public $lastName;
    public $age;

    function __construct(string $firstName, string $lastName, int $age)
    {
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
        $this->setAge($age);
    }

    public function setFirstName(string $name): void
    {
        $this->firstName = $name;
    }

    public function setLastName(string $name): void
    {
        $this->lastName = $name;
    }

    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function getFullName(): string
    {
        return $this->getFirstName() . ' ' . $this->getLastName();
    }

    public function getPerson(): string
    {
        return sprintf('Persons first and last name: %s, and age: %d.', $this->getFullName(), $this->getAge());
    }
}