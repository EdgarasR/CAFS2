<?php

require_once __DIR__ . '/classes/Vehicle.php';
require_once __DIR__ . '/classes/Boat.php';
require_once __DIR__ . '/classes/Bus.php';
require_once __DIR__ . '/classes/Car.php';
require_once __DIR__ . '/classes/Motorcycle.php';
require_once __DIR__ . '/classes/Plane.php';
require_once __DIR__ . '/classes/Cars/Bmw.php';

$boat = new Boat('Boat Maker', 'Boat Model', 2015);
$bus = new Bus('Bus Maker', 'Bus Model', 2010, 6);
$car = new Car('Car Maker', 'Car Model', 1995);
$motorcycle = new Motorcycle('Moto Maker', 'Moto Model', 2021, 2);
$plane = new Plane('Plane Maker', 'Plane Model', 2022, 6);
$bmw = new Bmw('530', 2015);

var_dump($boat, $boat->getIntroduction(), $boat->getAge(), $boat->getAgeText(), $boat->getWheelsNumberText(), $boat->getFuelType());
var_dump($bus, $bus->getIntroduction(), $bus->getAge(), $bus->getAgeText(), $bus->getWheelsNumberText(), $bus->getFuelType());
var_dump($car, $car->getIntroduction(), $car->getAge(), $car->getAgeText(), $car->getWheelsNumberText(), $car->getFuelType());
var_dump($motorcycle, $motorcycle->getIntroduction(), $motorcycle->getAge(), $motorcycle->getAgeText(), $motorcycle->getWheelsNumberText(), $motorcycle->getFuelType());
var_dump($plane, $plane->getIntroduction(), $plane->getAge(), $plane->getAgeText(), $plane->getWheelsNumberText(), $plane->getFuelType());
var_dump($bmw, $bmw->getIntroduction(), $bmw->getAge(), $bmw->getAgeText(), $bmw->getWheelsNumberText(), $bmw->getFuelType());