<?php

require_once __DIR__ . '/User.php';

class Student extends User
{
    private $kursas = 4;
    private $stipendija = 300;

    private function student()
    {
        echo $this->$kursas;
        echo $this->$stipendija;
    }
}