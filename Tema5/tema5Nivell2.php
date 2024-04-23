<?php

interface Description {
    public function typeShape(): string;
}

abstract class Shape {

    //Atributos
    public $ancho;
    public $alto;

    //constructor
    public function __construct(float $ancho, float $alto) {
        $this->ancho = $ancho;
        $this->alto = $alto;
    }

abstract public function area(): float;

}

class Triangle extends Shape implements Description {

    //Constructor
    public function __construct(float $ancho, float $alto) {
        parent::__construct($ancho, $alto);
    }

    //Método abstracto
    public function area(): float {

        return ($this->ancho * $this->alto) / 2;
    }

    //Metodo de la intefaz
    public function typeShape(): string {
        return "Soy un triángulo con un área de ";
    }

}

class Rectangle extends Shape implements Description {

    //Constructor
    public function __construct(float $ancho, float $alto) {
        parent::__construct($ancho, $alto);
    }

    //Método abstracto
    public function area(): float {

        return $this->ancho * $this->alto;
    }

    //Método de la interfaz
    public function typeShape(): string {
        return "Soy un rectángulo con un área de ";
    }

}

$triangle1 = new Triangle(4, 5);

echo $triangle1->typeShape() . $triangle1->area() . ".<br>";

$rectangle1 =  new Rectangle(4, 6);

echo $rectangle1->typeShape() . $rectangle1->area() . ".<br>";

?>