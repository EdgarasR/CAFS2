<?php

require_once __DIR__ . '/classes/ArrayHelper.php';

$arr = 
[
    5,
    15,
    18,
    17,
    21,
    66
];

var_dump(ArrayHelper::arraySum($arr));
var_dump(ArrayHelper::arrayAverage($arr));