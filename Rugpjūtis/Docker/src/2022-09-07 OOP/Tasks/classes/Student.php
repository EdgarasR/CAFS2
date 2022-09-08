<?php

require_once __DIR__ . '/User.php';

class Student extends User
{
    private string $course;
    private float $scholarship;
    public function __construct(string $name, string $age, string $course, float $scholarship)
    {
        parent::__construct($name, $age);
        $this->course = $course;
        $this->scholarship = $scholarship;
    }
    public function getCourse() : string
    {
        return $this->course;
    }
    public function getScolarship() : float
    {
        return $this->scolarship;
    }
    public function setCourse(string $course) : void
    {
        $this->course = $course;
    }
    public function setScolarship(float $scholarship) : void
    {
        $this->scolarship = $scholarship;
    }
}