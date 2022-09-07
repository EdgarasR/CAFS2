<?php

require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/Student.php';

$student = new Student('Edgaras', 27, 4, 1000);

var_dump($student);