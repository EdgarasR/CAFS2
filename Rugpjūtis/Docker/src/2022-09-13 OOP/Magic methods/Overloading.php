<?php

class Overloading
{
    public $a;

    public function __set(string $name, mixed $value): void
    {
        echo sprintf("__set, name: \"%s\", value: \"%s\" <br>\n", $name, $value);
    }

    public function __get($name): mixed
    {
        echo sprintf("__get, name: \"%s\", <br>\n", $name);
        return '__get';
    }

    public function __call(string $name, array $arguments): void
    {
        echo sprintf("__call, name: \"%s\", arguments: \"%s\" <br>\n", $name, json_encode($arguments));
    }

    public static function __callStatic(string $name, array $arguments): void
    {
        echo sprintf("__call, name: \"%s\", arguments: \"%s\" <br>\n", $name, json_encode($arguments));
    }
}

$obj = new Overloading();

$obj->a = 1;
$obj->b = 1;

var_dump($obj);
var_dump($obj->abc);

$obj->methodA();
$obj->methodB(123);

Overloading::run('static');