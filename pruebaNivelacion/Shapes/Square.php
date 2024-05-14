<?php declare(strict_types=1);

include "Shape.php";

class Square extends Shape {

    public float $sideLength;

    public function __construct(string $name, Color $color, float $sideLength) {
        parent::__construct($name, $color);
        $this->sideLength = $sideLength;
    }

    public function getArea(): float {
        return $this->sideLength * 2;
    }

    public function getInfo(): string {
        return "Name: " . $this->name . ". Color: " . $this->color->name . ". " . PHP_EOL;
    }


}

?>