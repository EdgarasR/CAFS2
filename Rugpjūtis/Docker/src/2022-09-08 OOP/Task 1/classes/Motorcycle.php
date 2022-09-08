<?php

class Motorcycle extends Vehicle
{
    function __construct(string $make, string $model, int $year, int $wheels)
    {
        parent::__construct($make, $model, $year);
        $this->setWheelsNumber($wheels);
    }

    public function getFuelType() : array
    {
        return [1,2];
    }
}

// Class export has been removed in PHP 8.0.0
// https://www.php.net/manual/en/reflectionclass.export.php