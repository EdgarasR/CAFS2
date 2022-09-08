<?php

class Vehicle
{
    function __construct(string $make, string $model, int $year)
    {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    public function setWheelsNumber(int $wheels) : void
    {
        $this->wheels = $wheels;
    }

    public function getIntroduction() : string
    {
        return $this->make . ' ' . $this->model;
    }

    public function getAge() : int
    {
        return date('Y') - $this->year;
    }

    public function getAgeText() : string
    {
        if($this->getAge() <= 10)
        {
            return sprintf('10 years old or newer');
        } else {
            return sprintf('11 years or old older');
        }
    }

    public function getWheelsNumber() : int
    {
        return $this->wheels ?? 0;
    }

    public function getWheelsNumberText() : string
    {
        return static::class . ' ' . "has {$this->getWheelsNumber()} wheels";
    }

    public function getFuelType()
    {
        throw new Exception('Fuel type not found');
    }
}