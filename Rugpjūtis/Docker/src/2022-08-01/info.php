<?php

$capital = 'Vilnius';

echo 'The capital of Lithuania is ', $capital, "\n";
echo "The capital of Lithuania is $capital \n";

$text = 'news';

echo "Where is my {$text}paper \n";

echo sprintf("The capital of Lithuania is %s\n", $capital);
echo sprintf("Where is my %spaper\n", $text);

$apples = 5;
$fruit = 'apples';

echo 'Obuolių skaičius: ', $$fruit, "\n";
echo "Obuolių skaičius: ${$fruit}\n";

?>