<?php

require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/Student.php';
require_once __DIR__ . '/classes/Worker.php';
require_once __DIR__ . '/classes/Driver.php';

$student = new Student('Studentas', 25, 500, 3);
$driver = new Driver('Vairuotojas', 53);

$student->setScholarship(500);
$student->setCourse(3);

$driver->setExperience('26 metai');
$driver->setCategories(['C','B']);
$driver->setSalary(3500);

var_dump($student);
var_dump($driver);