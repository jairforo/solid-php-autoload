<?php

namespace App;


class PlainReporter implements Reporter
{
    public function __construct(private AreaCalculator $calculator)
    {
    }

    public function output():void
    {
        foreach ($this->calculator->getValues() as $value) {
            echo $value["name"] . ": " . $value["area"] . "<br />";
        }
    }

}