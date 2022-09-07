<?php

require_once __DIR__ . '/User.php';

class Student extends User
{
    private $course = 4;
    private $scholarship = 300;

    public function getInfo()
    {
        echo $this->$course;
        echo $this->$scholarship;
    }
}