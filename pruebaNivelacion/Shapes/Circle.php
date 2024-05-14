<?php declare(strict_types=1);


class Circle extends Shape {

    public float $radius;

    public function __construct(string $name, Color $color, float $radius) {
        parent::__construct($name, $color);
        $this->radius = $radius;
    }

    public function getArea(): float {
        return $this->radius * M_PI;
    }

    public function getInfo(): string {
        return "Name: " . $this->name . ". Color: " . $this->color->name . ". " . PHP_EOL;
    }


}

?>