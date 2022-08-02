<pre>
<?php

$arr = 
[
    'a',
    'b',
    'c'
];
//Naudopju <pre> tagus ir print_r vietoj var_dump dėl lengvesnio skaitomumo;
print_r($arr);
echo "{$arr[0]}, {$arr[1]}, {$arr[2]} \n";

$arr =
[
    'a',
    'b',
    'c',
    'd'
];

echo "{$arr[0]} + {$arr[1]}, {$arr[2]} + {$arr[3]} \n";

$arr =
[
    2,
    5,
    3,
    9
];

$result = ($arr[0] * $arr[1]) + ($arr[2] * $arr[3]);
echo "{$result}\n";

$arr = range(1,5);
print_r($arr);
?>
</pre>