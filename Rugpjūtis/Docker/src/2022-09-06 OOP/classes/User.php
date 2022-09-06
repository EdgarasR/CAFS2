<?php

class User
{
    public $name;
    public static $age;
    public const PROFESSION = 'dev';

    public function setName(string $name) : void
    {
        $this->name = $name;
    }

    public static function setAge(int $age) : void
    {
        self::$age = $age;
    }

    public function getGreetings() : string
    {
        return sprintf("Hello. My name is %s. I'm %d years old", $this->name, self::$age);
    }
}