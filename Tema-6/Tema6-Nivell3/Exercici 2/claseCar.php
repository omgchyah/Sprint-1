<?php

trait Turbo {

    public function boost() {
        echo "Se ha iniciado el turbo.";
    }
}

class Car {

    //Atributos
    public marca;
    public matricula;
    public tipoCombustible;
    public velocidadMax;

    //Constructor
    public function __construct(string $marca, string $matricula, string $tipoCombustible, float $velocidadMax) {
        $this->marca = $marca;
        $this->matricula = $matricula;
        $this->tipoCombustible = $tipoCombustible;
        $this->velocidadMax = $velocidadMax;
    }

    //Setters
    public function setMarca(string $marca) {
        $this->marca = $marca;
    }

    public function setMatricula(string $matricula) {
        $this->matricula = $matricula;
    }

    public function setTipoCombustible(string $tipoCombustible) {
        $this->tipoCombustible = $tipoCombustible;
    }

    public function setVelocidadMax(float $velocidadMax) {
        $this->velocidadMax = $velocidadMax;
    }

    //Getters

    public function getMarca() {
        return $this->marca;
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function getTipoCombustible() {
        return $this->tipoCombustible;
    }

    public function getVelocidadMax() {
        return $this->velocidadMax;
    }

    use Turbo;

    public function boost() {
        echo "Se ha iniciado el turbo y la velocidad supera los " . $this->velocidadMax . "km/h.";
    }

}



?>