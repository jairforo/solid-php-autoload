<?php
namespace App;

use App\Exception\ShapeNotSupported;

class AreaCalculator
{
    private array $values = [];

    public function __construct(private array $shapes)
    {
        $this->calculate();
    }

    /**
     * @return array
     */
    public function getValues(): array
    {
        return $this->values;
    }

    public function calculate()
    {
        foreach ($this->shapes as $shape) {
            if (!$shape instanceof Area) {
                throw new ShapeNotSupported('Shape Not supported.');
            }

            $this->values[] = [
                "name" => get_class($shape),
                "area" => $shape->calcArea(),
            ];
        }
    }
}