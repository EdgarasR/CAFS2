<?php

require_once '../vendor/autoload.php';

use App\Classes\Tag;

$tag = new Tag('a');

$tag->setText('title')->setAttr('href', 'index.html')->show();

$tag->setText('title')->setAttr('href', 'index.html')->get();