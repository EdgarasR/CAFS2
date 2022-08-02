<?php

define('NEW_LINE', "<br>\n");

echo "2 + 2 = ", 2 + 2, NEW_LINE;
echo "5 - 2 = ", 5 - 2, NEW_LINE;
echo "10 * 10 = ", 10 * 10, NEW_LINE;
echo "100 / 2 = ", 100 / 2, NEW_LINE;
echo "10 % 2 = ", 10 % 2, NEW_LINE;

echo round(4.2), NEW_LINE;

$fruits = 14;
var_dump($fruits);

$n = $m = $p = 3;
var_dump($n, $m, $p);
echo $n, $m, $p, "\n";

$m += 5;
var_dump($m);
$m -= 3;
var_dump($m);

echo "-------\n";

$n = 3;
$m = &$n;
$p = &$m;

$p = 5;

var_dump($n, $m, $p);
echo NEW_LINE;

$a = $b = $c = $d = 2;

echo ++$a, NEW_LINE;
echo $b++, ' ', $b, NEW_LINE;
echo --$c, NEW_LINE;
echo $d--, ' ', $d, NEW_LINE;

$a = 5;
$b = 8;

if ($a > $b) {
    echo "a is bigger than b";
} elseif ($a == $b) {
    echo "a is equal to b";
} else {
    echo "a is smaller than b";
}