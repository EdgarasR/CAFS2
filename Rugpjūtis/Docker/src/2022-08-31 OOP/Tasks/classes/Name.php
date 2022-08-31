<?php

class Name
{
    public $firstName;

    function __construct(string $firstName)
    {
        $this->firstName = $firstName;
    }

    public function getName(): string
    {
        return $this->firstName;
    }

    public function greetings(): string
    {
        return "Sveiki, mano vardas yra " . $this->firstName;
    }
}