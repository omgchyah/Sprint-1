<?php

//EXERCICI 1

class Employee {

    //Atributos
    public $nom;
    public $salary;

    //Constructor
    public function __construct(string $nom, int $salary) {
        $this->nom = $nom;
        $this->salary = $salary;
    }

    //Método propio o personalizado
    public function print() {

        if($this->salary > 6000) {
            echo "El empleado $this->nom gana $this->salary euros y no tiene que pagar impuestos.";
        } else {
            echo "El empleado $this->nom gana $this->salary euros y tiene que pagar impuestos.";
        }

    }
}

    //EXERCICI 2

    //Clase padre

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

    class Triangulo extends Shape {

        //No tiene parametros nuevos

        //contructor
        public function __construct(int $ancho, int $alto) {
            parent::__construct($ancho, $alto);
        }

        //No necesita parámetros porque los hereda del padre
        public function area(): float {

            return (($this->ancho * $this->alto) / 2);

        }

    }

    class Rectangulo extends Shape {

        //constructor
        public function __construct($ancho, $alto) {
            parent::__construct($ancho, $alto);
        }

        public function area(): float {

            return $this->ancho * $this->alto;
        }

    }


?>