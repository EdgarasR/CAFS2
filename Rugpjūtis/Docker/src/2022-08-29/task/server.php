<?php

if(isset($_POST)) {
    $ch = curl_init('https://randomuser.me/api?results=1');

    $fp = fopen("./data/random.json", "w");

    curl_setopt($ch, CURLOPT_FILE, $fp);
    curl_setopt($ch, CURLOPT_HEADER, 0);

    curl_exec($ch);
    if(curl_error($ch)) {
        fwrite($fp, curl_error($ch));
    }
    curl_close($ch);
    fclose($fp);
}