<?php

class Driver extends Worker
{
    protected $experience;
    protected $categories;

    public function setExperience(string|int $experience) : void
    {
        $this->experience = $experience;
    }

    public function getExperience() : string|int
    {
        return $this->experience;
    }

    public function setCategories(array|string $categories) : void
    {
            $this->categories = $categories;
    }

    public function getCategories() : array|string
    {
        return $this->categories;
    }
}