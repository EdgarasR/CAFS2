<?php

require_once __DIR__ . '/classes/Person.php';

$person1 = new Person('Edgaras', 'Račiūnas', 27);
$person2 = new Person('Vardenis', 'Pavardenis', 54);
$person3 = new Person('Lorem', 'Impsum', 9);

echo ($person1->getPerson());
echo ($person2->getPerson());
echo ($person3->getPerson());