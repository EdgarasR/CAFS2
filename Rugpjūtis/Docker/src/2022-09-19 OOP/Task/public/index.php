<?php

require_once '../vendor/autoload.php';

use App\Classes\Tag;

$tag = new Tag('a');

echo $tag->setText('title')->setAttr('href', 'index.html')->show();

echo "<br>";

echo $tag->setText('title')->setAttr('href', 'index.html')->get();