<?php declare(strict_types=1);

require "classEmployee.php";

//EXERCICI 1 Instanciar un objecto desde la clase Employee

$empleado1 = new Employee("Pedro", 3000);
$empleado2 = new Employee("María", 7000);

echo $empleado1->pagarImpuestos();
echo $empleado2->pagarImpuestos();

?>