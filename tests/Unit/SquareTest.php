<?php

namespace App\Tests\Unit;

use App\Square;
use PHPUnit\Framework\TestCase;

class SquareTest extends TestCase
{
    /**
     * @dataProvider getSquares
     */
    public function test_if_square_area_is_right(float|int $width, float|int $height, float|int $expected)
    {
        $square = new Square($width, $height);
        $this->assertEquals($expected, $square->calcArea());
    }

    public function getSquares(): array
    {
        return [
            [5, 5, 25],
            [5.2, 5, 26],
            [5.2, 5.2, 27.04],
        ];
    }
}