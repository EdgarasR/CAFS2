<?php

// simple solution

// file_put_contents('Excels/simple.csv', file_get_contents('https://randomuser.me/api/?format=csv'));

// convert - straight

// $data = file_get_contents('https://randomuser.me/api/?results=5');
// $data = json_decode($data, TRUE);

// $fp = fopen('Excels/convert-straight.csv', 'w');
// foreach($data['results'] as $values) {
//     $values = array_map(function($value) {
//         return is_array($value) ? json_encode($value) : $value;
//     }, $values);
//     fputcsv($fp, $values);
// }
// fclose($fp);

// convert - recursive

