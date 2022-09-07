<?php

require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/Student.php';

$student = new Student();

var_dump($student->student());