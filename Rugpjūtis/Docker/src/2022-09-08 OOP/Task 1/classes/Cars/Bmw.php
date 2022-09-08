<?php

require_once '/var/www/2022-09-08 OOP/Task 1/classes/Vehicle.php';

class Bmw extends Car
{
    function __construct(string $model, int $year)
    {
        parent::__construct('Bmw', $model, $year);
    }
}