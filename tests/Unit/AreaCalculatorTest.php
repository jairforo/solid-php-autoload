<?php

namespace App\Tests\Unit;

use App\Cylinder;
use App\Exception\ShapeNotSupported;
use App\AreaCalculator;
use App\Square;
use PHPUnit\Framework\TestCase;

class AreaCalculatorTest extends TestCase
{
    public function test_should_throw_an_not_supported_shape_exception()
    {
        $this->expectException(ShapeNotSupported::class);

        $shapes = [
            new Square(34, 34),
            new Cylinder(34, 34),//It's not valid! Bang it will fail
        ];

        new AreaCalculator($shapes);
    }
}