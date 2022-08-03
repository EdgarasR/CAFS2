<?php

// Parašykite funkciją, kuri grąžina skaičiaus kvadratą. Skaičius perduodamas kaip parametras.

function getSquare($arg) 
{
    return ($arg * $arg);
}

// Parašykite funkciją, kuri grąžina dviejų skaičių sumą. Skaičiai perduodami funkcijos parametrus.

function getSum($arg1, $arg2) 
{
    return ($arg1 + $arg2);
}

// Parašykite funkciją, kuri iš antro parametro atima pirmą ir padalija iš trečio.

function doMath($arg1, $arg2, $arg3)
{
    return (($arg2 - $arg1) / $arg3);
}

// Parašykite funkciją, kuri priima kaip parametrą skaičių nuo 1 iki 7, o grąžina savaitės dieną lietuvių kalba.

function getDay($num)
{
    switch($num) 
    {
        case 1:
            echo "Pirmadienis";
            break;
        case 2:
            echo "Antradienis";
            break;
        case 3:
            echo "Trečiadienis";
            break;
        case 4:
            echo "Ketvirtadienis";
            break;
        case 5:
            echo "Penktadienis";
            break;
        case 6:
            echo "Šeštadienis";
            break;
        case 7:
            echo "Sekmadienis";
            break;
    }
}

echo getSquare(5);
echo "<br>";
echo getSum(2,6);
echo "<br>";
echo doMath(2,6,2);
echo "<br>";
getDay(5);