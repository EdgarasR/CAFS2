<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $json = json_decode(file_get_contents('php://input'), true);
    $file = fopen('./data/'. $json['results'][0]['name']['first'] . '.json', "w");
    fwrite($file, json_encode($_POST));
    fclose($file);
}