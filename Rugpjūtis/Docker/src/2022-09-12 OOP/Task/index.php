<?php

require_once __DIR__ . '/classes/Person.php';
require_once __DIR__ . '/classes/Programmer.php';
require_once __DIR__ . '/classes/Student.php';
require_once __DIR__ . '/classes/Teacher.php';

$programmer = new Programmer('Edgaras');
$student = new Student('Edgaras');
$teacher = new Teacher('Edgaras');

echo ($programmer->greetings());
echo "<br>";
echo ($student->greetings());
echo "<br>";
echo ($teacher->greetings());