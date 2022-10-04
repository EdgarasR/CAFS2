<?php

require_once __DIR__ . '/connect.php';

$result = $mysqli->query('SELECT * FROM `users`');
// $result = $result->fetch_all(MYSQLI_ASSOC);

// var_dump($result);
// var_dump($result[0]['password']);

// while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
//     var_dump($row);
// }

// while ($row = $result->fetch_object()) {
//     var_dump($row);
// }

while ($finfo = $result->fetch_field()) {
    printf("Name: %s\n", $finfo->name);
}
