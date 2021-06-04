<?php

namespace App;

class Circle implements Area
{
    public function __construct(private float|int $radius)
    {
    }

    /**
     * @return float|int
     */
    public function getRadius(): float|int
    {
        return $this->radius;
    }

    public function calcArea(): float
    {
        return round($this->radius * $this->radius * pi());
    }
}