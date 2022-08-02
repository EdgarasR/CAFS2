<pre>
<?php

$name = 'Edgaras';

// function functionName() 
// {
//     var_dump($name);
// };

// functionName();

// $varFunction = function() use($name)
// {
//     var_dump($name);
// };

// $varFunction();

function createUser($name, $surname = null, $address = null, $city = null, $email = null, $phone = null) {
    return compact('name', 'surname', 'address', 'city', 'email', 'phone');
};

print_r(createUser('Edgaras'));

$workers = [
    [
        'name' => 'a',
        'salary' => 400
    ],
    [
        'name' => 'b',
        'salary' => 500
    ],
    [
        'name' => 'c',
        'salary' => 600
    ]
    ];

function getBonus() {
    return 50;
}

$bonus = getBonus();

$workers = array_map(function($worker) use($bonus) {
    $worker['salary'] += $bonus;
    return $worker;
}, $workers);

print_r($workers);

$y = 1;
$fn1 = fn($x) => $x + $y;
//same as
$fn2 = function($x) use($y) {
    return $x + $y;
};

echo $fn1(3), "\n";
echo $fn2(5);

?>
</pre>