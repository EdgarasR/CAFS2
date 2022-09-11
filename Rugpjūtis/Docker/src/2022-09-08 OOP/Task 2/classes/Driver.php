<?php

class Driver extends Worker
{
    protected $experience;
    protected $category;
    private static $allowedCategories = ['AM', 'A1', 'A2', 'B1', 'B', 'C1', 'C', 'D1', 'D', 'BE', 'C1E', 'CE', 'D1E', 'DE', 'T'];

    public function setExperience(string|int $experience) : void
    {
        $this->experience = $experience;
    }

    public function setCategory(array|string $category) : void
    {
        if(in_array($category, self::$allowedCategories))
        {
            $this->category = $category;
        } else {
            throw new Exception('Category not allowed.', 406);
        }
    }

    public function getCategory() : array|string
    {
        return $this->category;
    }

    public function getExperience() : string|int
    {
        return $this->experience;
    }

}