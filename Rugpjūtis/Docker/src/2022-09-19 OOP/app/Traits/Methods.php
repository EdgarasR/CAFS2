<?php

namespace App\Traits;

trait Methods
{
    public function setText(string $text)
    {
        $this->text = $text;
        return $this;
    }

    public function setAttr(string $attribute, string $value)
    {
        $this->attribute = $attribute;
        $this->value = $value;

        return $this;
    }
}