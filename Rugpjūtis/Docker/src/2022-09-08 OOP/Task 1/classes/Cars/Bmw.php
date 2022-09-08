<?php

class Bmw extends Car
{
    function __construct(string $model, int $year)
    {
        parent::__construct('Bmw', $model, $year);
    }
}