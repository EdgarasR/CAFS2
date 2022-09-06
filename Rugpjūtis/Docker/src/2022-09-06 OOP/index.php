<?php
require_once __DIR__ . '/classes/User.php';

$names = ['A', 'B', 'C'];

User::setAge(27);

foreach ($names as $name) {
    $user = new User();
    $user->setName($name);
    var_dump($user->getGreetings());
}

var_dump(User::$age);

var_dump(User::PROFESSION);
var_dump(User::CLASS);