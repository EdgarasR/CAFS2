<?php

class Academy
{
    private array $students = [];

    public function add(Student $student): void
    {
        array_push($this->students, $student);
    }

    public function getAll(): array
    {
        return $this->students;
    }
}