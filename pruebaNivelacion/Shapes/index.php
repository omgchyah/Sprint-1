<?php declare(strict_types=1);

include "Square.php";
include "Circle.php";

$shape1 = new Square("Cuadrado", Color::Green, 5.7);
$shape2 = new Circle("Círculo", Color::Blue, 2.78);

echo $shape1->name . PHP_EOL;

echo $shape1->getArea() . PHP_EOL;

echo $shape1->getInfo(). PHP_EOL;

echo $shape2->getArea() . PHP_EOL;

echo $shape2->getInfo(). PHP_EOL;

?>