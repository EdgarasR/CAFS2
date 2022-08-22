<?php

$path = './posts.json';

$handle = fopen($path, 'r');
$contents = fread($handle, filesize($path));

fclose($handle);

var_dump($contents, filesize($path));