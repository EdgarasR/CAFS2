<?php

require_once __DIR__ . '/classes/Vehicle.php';
require_once __DIR__ . '/classes/Boat.php';
require_once __DIR__ . '/classes/Bus.php';
require_once __DIR__ . '/classes/Car.php';
require_once __DIR__ . '/classes/Motorcycle.php';
require_once __DIR__ . '/classes/Plane.php';
require_once __DIR__ . '/classes/Cars/Bmw.php';

try {

$vehicles =
[
    new Boat('Boat Maker', 'Boat Model', 2015),
    new Bus('Bus Maker', 'Bus Model', 2010, 6),
    new Car('Car Maker', 'Car Model', 1995),
    new Motorcycle('Moto Maker', 'Moto Model', 2021, 2),
    new Plane('Plane Maker', 'Plane Model', 2022, 6),
    new Bmw('530', 2015)
];

foreach ($vehicles as $vehicle)
{
    echo sprintf("Vehicle %s is %s. %s\n", $vehicle->getIntroduction(), $vehicle->getAgeText(), $vehicle->getWheelsNumberText());
}

}catch(Exception $e){
    var_dump($e->getMessage());
}