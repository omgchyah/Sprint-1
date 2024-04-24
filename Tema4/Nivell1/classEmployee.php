<?php declare(strict_types=1);

//EXERCICI 1 Clase Employee

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
    public function pagarImpuestos(): string {

        if($this->salary > 6000) {
            return "El empleado $this->nom gana $this->salary euros y tiene que pagar impuestos.<br>";
        } else {
            return "El empleado $this->nom gana $this->salary euros y no tiene que pagar impuestos.<br>";
        }

    }
}

?>