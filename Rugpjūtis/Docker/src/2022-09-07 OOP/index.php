<?php

require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/Visibility.php';

$visibility = new Visibility();

$visibility->show();

var_dump($visibility->public);
var_dump($visibility->protected);
var_dump($visibility->private);