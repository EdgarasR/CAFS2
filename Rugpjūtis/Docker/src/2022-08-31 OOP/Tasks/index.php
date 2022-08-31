<?php

require_once __DIR__ . '/classes/Name.php';

$user = new Name('Edgaras');

print_r($user->greetings());