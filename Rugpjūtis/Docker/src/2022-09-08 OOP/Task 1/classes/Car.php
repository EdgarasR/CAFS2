<?php

require_once __DIR__ . '/Vehicle.php';

class Car extends Vehicle
{
    function __construct(string $make, string $model, int $year)
    {
        parent::__construct($make, $model, $year);
        $this->wheels = 4;
    }

    public function getFuelType() : array
    {
        return [1,2];
    }
}