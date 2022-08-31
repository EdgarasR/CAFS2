<?php

require_once __DIR__ . '/classes/Name.php';

$user = new Name('Edgaras');
$user2 = new Name('Testas');

print_r($user->greetings());
echo "\n";
print_r($user2->greetings());