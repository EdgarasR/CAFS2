<?php

class ArrayHelper 
{
    public static function arraySum(array $arr): int
    {
        return array_sum($arr);
    }

    public static function arrayAverage(array $arr): float
    {
        return self::arraySum($arr) / count($arr);
    }
}