<?php

require_once __DIR__ . '/classes/Vehicle.php';
require_once __DIR__ . '/classes/Car.php';
require_once __DIR__ . '/classes/Boat.php';
require_once __DIR__ . '/classes/Plane.php';

$plane = new Plane(1000, 3, 'diesel');
$car = new Car(1000, 4, 'electrical');
$boat = new Boat(1000, 2, 'wind');

var_dump($plane->getDistancePrice(200));
var_dump($car->getDistancePrice(200));
var_dump($boat->getDistancePrice(200));