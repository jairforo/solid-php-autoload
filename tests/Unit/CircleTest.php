<?php

namespace App\Tests\Unit;

use App\Circle;
use PHPUnit\Framework\TestCase;

class CircleTest extends TestCase
{
    /**
     * @dataProvider getCircles
     */
    public function test_if_circle_area_is_right(float|int $radius, float|int $expected)
    {
        $Circle = new Circle($radius);
        $this->assertEquals($expected, $Circle->calcArea());
    }

    public function getCircles(): array
    {
        return [
            [5, 79],
            [5.2, 85],
        ];
    }
}