<?php

class Name
{
    public $firstName;

    function __construct(string $firstName)
    {
        $this->setName($firstName);
    }

    public function setName(string $name): void
    {
        $this->firstName = $name;
    }

    public function getName(): string
    {
        return $this->firstName;
    }

    public function greetings(): string
    {
        return "Sveiki, mano vardas yra " . $this->getName();
    }
}