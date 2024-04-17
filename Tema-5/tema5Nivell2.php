<?php

abstract class Shape {

    //Atributos
    private $ancho;
    private $alto;

    //constructos
    public function __construct(float $ancho, float $alto) {
        $this->ancho = $ancho;
        $this->alto = $alto;
    }

}

?>