<?php
require_once __DIR__ . '/../vendor/autoload.php';

echo "<h1>Area Calculator... </h1><br />";

$shapes = [
    new \App\Square(34, 34,5),
    new \App\Circle(34),
    new \App\Rectangle(5, 6)
];

$calculator = new \App\AreaCalculator($shapes);
(new \App\PlainReporter($calculator))->output();
