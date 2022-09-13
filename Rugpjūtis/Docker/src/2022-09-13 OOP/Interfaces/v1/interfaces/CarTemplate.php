<?php

interface CarTemplate
{
    public function getBrand(): string;
    public function getModel(): string;

    public function setBrand(string $brand): void;
    public function setModel(string $model): void;
}