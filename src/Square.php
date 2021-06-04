<?php

namespace App;

class Square implements Area
{
    public function __construct(private float|int $width, private float|int $height)
    {
    }

    /**
     * @return float|int
     */
    public function getWidth(): float|int
    {
        return $this->width;
    }

    /**
     * @return float|int
     */
    public function getHeight(): float|int
    {
        return $this->height;
    }

    public function calcArea(): float
    {
        return $this->width * $this->height;
    }
}