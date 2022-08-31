<?php
require_once __DIR__ . '/classes/User.php';

$user = new User('E', 'Rc');
$userAnonym = new User('Anonym');

var_dump($user);
var_dump($userAnonym);

var_dump(User::CONSTANT);
var_dump(User::CONSTANT_ONE);
var_dump(User::CONSTANT_ARR);

$user->useConstants();

echo "Hello World! 1\n";
unset($userAnonym);
echo "Hello World! 2\n";
echo "Hello World! 3\n";