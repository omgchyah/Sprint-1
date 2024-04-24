<?php declare(strict_types=1);


class Rectangle extends Shape {

    //constructor es opcional escribirlo
    public function __construct($ancho, $alto) {
        parent::__construct($ancho, $alto);
    }

    public function area(): string {

        return "El área del rectángulo es " . $this->ancho * $this->alto . ".<br>";
    }

}

?>