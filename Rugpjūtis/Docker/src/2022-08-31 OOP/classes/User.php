<?php

class User
{
    public $firstName;
    public $lastName;
    public $age = 27;
    public $arr = [
        'one',
        2,
        'three' => 3,
        'arr' => []
    ];

    public const CONSTANT = 'SOME-VALUE';
    public const CONSTANT_ONE = 2 + 2;
    public const CONSTANT_ARR = ['a', 'b', 'c'];

    function __construct(?string $firstName = null, ?string $lastName = null)
    {
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
    }

    public function setFirstName(string $name): void
    {
        $this->firstName = $name;
    }

    public function setLastName(?string $name = null): void
    {
        $this->lastName = $name;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function getFullName(): string
    {
        return $this->getFirstName() . ' - ' . $this->getLastName();
    }

    function __destruct()
    {
        var_dump($this->getFullName() . ' - ' . __FUNCTION__);
    }

    public function useConstants(): void
    {
        var_dump(User::CONSTANT);
        var_dump(User::CONSTANT_ONE);
        var_dump(User::CONSTANT_ARR);
    }
}