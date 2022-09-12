<?php

class Car extends Vehicle
{
    function __construct(private float $weight, private int $passengers, private string $fuelType)
    {
    }

    public function getPriceForOneKm(): float
    {
        return 0.3;
    }

    public function getDistancePrice(int $kilometers): float
    {
        return ($this->weight / $this->passengers) * $kilometers * $this->getPriceForOneKm();
    }
}