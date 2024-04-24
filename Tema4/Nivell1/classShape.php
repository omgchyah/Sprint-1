<?php declare(strict_types=1);

class Shape {

    //Atributos
    public $ancho;
    public $alto;

    //Constructor
    public function __construct(float $ancho, float $alto) {
        $this->ancho = $ancho;
        $this->alto = $alto;

    }

}

?>