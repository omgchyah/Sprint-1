<?php

    //Tema 6 Nivell 3 Exercici 2

    trait Turbo {

        public function boost() {
            return "Se ha iniciado el turbo.";
        }

    }

    class Car {

        //Atributos
        public $marca;
        public $matricula;
        public $tipoCombustible;
        public $velocidadMax;

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

        public function getMarca(): string {
            return $this->marca;
        }

        public function getMatricula(): string {
            return $this->matricula;
        }

        public function getTipoCombustible(): string {
            return $this->tipoCombustible;
        }

        public function getVelocidadMax(): float {
            return $this->velocidadMax;
        }

        public function __toString(): string {
            return "Soy un vehículo " . $this->marca .
            " con matrícula " . $this->matricula .
            " y uso combustible " . $this->tipoCombustible .
            " con una velocidad máxima de " . $this->velocidadMax . " km/h.<br>";
        }

        use Turbo;

    public function boost(): string {
            return "Se ha iniciado el turbo y la velocidad supera los " . $this->velocidadMax . " km/h.<br>";
        }
    }


?>