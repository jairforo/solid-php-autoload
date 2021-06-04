<?php

namespace App;

class Rectangle extends Square
{
    public function __construct(float|int $width, float|int $height)
    {
        parent::__construct($width, $height);
    }
}