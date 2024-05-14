<?php declare(strict_types=1);

include "Color.php";

abstract class Shape {
public string $name;
public Color $color;

public function __construct(string $name, Color $color) {
    $this->name = $name;
    $this->color = $color;
}

abstract public function getArea();

abstract public function getInfo();
}




?>