<?php

$day = 24;
$hours = $minutes = $seconds = 60;

$dayMinutes = $minutes * $day;
$daySeconds = $dayMinutes * $seconds;
$message = "Paroje yra %d valandos, %d minutės, %d sekundės";

echo sprintf($message, $day, $dayMinutes, $daySeconds);