<?php

namespace App\Traits;

trait Elements
{
    function label(string $id, string $label): string
    {
        return sprintf("<label for=\"%s\" class=\"form-label\">%s</label>", $id, $label);
    }

    function input(string $type, string $placeholder, string $id): string
    {
        return sprintf("<input type=\"%s\" class=\"form-control mt-2\" placeholder=\"%s\" id=\"%s\">", $type, $placeholder, $id);
    }

    // Koks tikslas šito?
    function password(string $placeholder)
    {
        return $this->input('password', $placeholder, '');
    }

    function textarea(string $placeholder)
    {
        return sprintf("<textarea placeholder=\"%s\" class=\"form-control\"></textarea>", $placeholder);
    }
}