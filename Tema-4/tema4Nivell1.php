<?php

//EXERCICI 1

class Employee {

    //Atributos
    private $nom;
    private $salary;

    //Constructor
    public function __construct($var1, $var2) {
        $this->nom = $var1;
        $this->salary = $var2;
    }

    //Método propio o personalizado
    public function print() {

        if($this->salary > 60000) {
            echo "El empleado $this->nom gana $this->salary euros y no tiene que pagar impuestos.";
        } else {
            echo "El empleado $this->nom gana $this->salary euros y tiene que pagar impuestos.";
        }

    }

    //EXERCICI 2

    class Shape {

        //Atributos
        private $ancho;
        private $alto;

        //Constructor
        public function __construct($ancho, $alto) {
            $this->ancho = $ancho;
            $this->alto = $alto;

        }


    }

    class Triangulo extends Shape {

        //contructor
        public function __construct($ancho, $alto) {
            parent::__construct($ancho, $alto);
        }

        public function Area($ancho, $alto) {

        }

    }


}

?>