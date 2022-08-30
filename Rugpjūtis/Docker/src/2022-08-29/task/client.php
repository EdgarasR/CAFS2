<?php

$url = 'https://randomuser.me/api/?results=1';
 
$curl = curl_init();
 
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
 
$data = curl_exec($curl);

curl_close($curl);

$urlServer = 'http://nginx/2022-08-29/task/server.php';
 
$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, $urlServer);
curl_setopt($curl, CURLOPT_POST, TRUE);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
 
$data2 = curl_exec($curl);

curl_close($curl);