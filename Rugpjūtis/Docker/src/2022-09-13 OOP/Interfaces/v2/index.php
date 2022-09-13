<?php

require_once __DIR__ . '/classes/Academy.php';
require_once __DIR__ . '/classes/Student.php';

$academy = new Academy();

// $academy->add([
//     'name' => 'E',
//     'age' => 27
// ]);

// $academy->add([
//     'name' => 'A',
//     'age' => 30
// ]);

// $academy->add([
//     'name' => 'B',
//     'age' => 22
// ]);

$student = new Student('Edgaras', 27);

$academy->add($student);

var_dump($academy->getAll());