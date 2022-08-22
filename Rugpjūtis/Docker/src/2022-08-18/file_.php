<?php

$data = file_get_contents('./posts.json');
$data = json_decode($data, TRUE);

// var_dump($data);

$user = [
    'name' => 'K',
    'surname' => 'C',
    'age' => 31
];

file_put_contents('./user.json', json_encode($user));

// -------------------------- //

$data = file_get_contents('https://jsonplaceholder.typicode.com/users');
$data = json_decode($data, TRUE);

// var_dump($data);

file_put_contents('./users', serialize($data));
