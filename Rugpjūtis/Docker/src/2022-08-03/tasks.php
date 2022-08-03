<?php

$a = 1;
for ($i=0;$i<9;$i++)
{
    for ($j=0;$j<=$i;$j++)
    { 
        echo $a;
    }
    $a++;
    echo "<br>";
}

$b = 1;
while ($b <= 9) 
{
    for ($i=0;$i<$b;$i++) 
    { 
        echo $b;
    }
    $b++;
    echo "<br>";
}