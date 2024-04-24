<?php declare(strict_types=1);

require "classShape.php";

class Triangle extends Shape {

    //El constructor es opcional escribirlo porque no hay parámetros nuevos

    public function __construct(int $ancho, int $alto) {
        parent::__construct($ancho, $alto);
    }

    public function area(): string {

        return "El área del triángulo es " . (($this->ancho * $this->alto) / 2) . ".<br>";

    }

}

?>