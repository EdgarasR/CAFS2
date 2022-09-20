<?php

namespace App\Traits;

trait Methods
{
    public function setText(string $text): object
    {
        $this->text = $text;
        return $this;
    }

    public function setAttr(string $attribute, mixed $value): object
    {
        $this->attr .= sprintf(' %s="%s"', $attribute, $value);

        return $this;
    }
}