<?php

namespace App;

class Cylinder implements Volume
{
    public function __construct(private float|int $radius, private float|int $height)
    {
    }

    public function calcVolume(): float
    {
        return $this->radius * $this->radius * pi();
    }
}