<?php

class Garage
{
    private array $garage = [];

    public function add(string $car): void
    {
        $this->garage[] = $car;
    }

    public function __invoke($x)
    {
        $this->garage[] = $x;
    }

    public function __toString(): string
    {
        return json_encode($this->garage);
    }
}

$garage = new Garage();

$garage->add('BMW X5');
$garage->add('Audi Q7');
$garage->add('MB CLK');
$garage->add('VW Toureg');

$garage('Toyota Supra');

echo $garage;

file_put_contents('garage.json', $garage);