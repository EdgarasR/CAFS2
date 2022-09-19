<?php

namespace App\traits;

trait Elements
{
    function label(string $id, string $label): string
    {
        return sprintf("<label for=\"%s\" class=\"form-label\">%s</label>", $id, $label);
    }

    function input(string $type, string $placeholder, string $id): string
    {
        return sprintf("<input type=\"%s\" class=\"form-control\" placeholder=\"%s\" id=\"%s\">", $type, $placeholder, $id);
    }

    function textarea(string $placeholder)
    {
        return sprintf("<textarea placeholder=\"%s\" class=\"form-control\"></textarea>", $placeholder);
    }
}