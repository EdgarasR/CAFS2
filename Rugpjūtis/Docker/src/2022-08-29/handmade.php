<?php

// $data = file_get_contents('https://www.15min.lt/');
// file_put_contents(__DIR__ . '/data/15min.html', $data);
// echo $data;


$url = 'https://api.meteo.lt/v1/places/vilnius/forecasts/long-term';
// create a new cURL resourse
$ch = curl_init();

// set URL and other appropriate options
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, true);

// grab URL and pass ir to the browser
$response = curl_exec($ch);

// close cURL resourse, and free up system reqources
curl_close($ch);

list($headers, $body) = explode("\r\n\r\n", $response);
$data = json_decode($body, true);

var_dump($headers, $data);
