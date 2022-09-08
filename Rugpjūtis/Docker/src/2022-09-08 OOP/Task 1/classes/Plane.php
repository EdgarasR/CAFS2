<?php

class Plane extends Vehicle
{
    function __construct(string $make, string $model, int $year, int $wheels)
    {
        parent::__construct($make, $model, $year);
        $this->wheels = $wheels;
    }

    public function getFuelType() : array
    {
        return [5];
    }
}