<?php

abstract class Shape {

    //Atributos
    public $ancho;
    public $alto;

    //constructor
    public function __construct(float $ancho, float $alto) {
        $this->ancho = $ancho;
        $this->alto = $alto;
    }

}

?>