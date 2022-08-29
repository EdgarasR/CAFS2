<?php

$url = 'https://randomuser.me/api/?results=1';
 
$curl = curl_init();
 
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HEADER, false);
 
$data = curl_exec($curl);

curl_close($curl);

$json = json_decode($data, TRUE);

$urlServer = 'http://nginx/2022-08-29/task/server.php';
 
$curl = curl_init();

$post_string = http_build_query($json);
 
curl_setopt($curl, CURLOPT_URL, $urlServer);
curl_setopt($curl, CURLOPT_POST, TRUE);
curl_setopt($curl, CURLOPT_POSTFIELDS, $post_string);
 
$data = curl_exec($curl);

curl_close($curl);