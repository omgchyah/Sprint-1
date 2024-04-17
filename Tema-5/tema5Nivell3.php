<?php

interface Description {

    public function typeShape(): string;
}

abstract class Shape {

abstract public function area(): float;

}

class Triangle extends Shape implements Description {
    
    //Atributos
        public $ancho;
        public $alto;

        //constructor
        
    public function __construct(float $ancho, float $alto) {
        $this->ancho = $ancho;
        $this->alto = $alto;
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

        //Atributos
        public $ancho;
        public $alto;

        //constructor
        
    public function __construct(float $ancho, float $alto) {
        $this->ancho = $ancho;
        $this->alto = $alto;
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

//Nueva clase Circle
class Circle extends Shape implements Description {

    //Atributos
    public $radio;

    //constructor
    public function __construct(float $radio) {
        $this->radio = $radio;
    }

    //Método abstracto
    public function area(): float {
        return 3.1416 * pow($this->radio, 2);
    }

    //Método de la interfaz
    public function typeShape(): string {
        return "Soy un círculo de área ";
    }


}

$triangle1 = new Triangle(10, 3);

echo $triangle1->typeShape() . $triangle1->area() . ".<br>";

$rectangle1 =  new Rectangle(6, 5.4);

echo $rectangle1->typeShape() . $rectangle1->area() . ".<br>";

$circulo1 = new Circle(4);

echo $circulo1->typeShape() . $circulo1->area() . ".";

?>