<?php

class Plane extends Vehicle
{
    function __construct(private float $weight, private int $engines, private string $fuelType)
    {
    }

    public function getDistancePrice(int $kilometers): float
    {
        return ($this->weight / $this->engines) * $kilometers * $this->getPriceForOneKm();
    }

    public function getPriceForOneKm(): float
    {
        return 0.5;
    }
}