<?php

//Tema 6 Nivell 3 Exercici 2

include "claseCar.php";

$tesla1 = new Car("Tesla Model Y", "D67TJ", "Eléctrico", 250); ;

echo $tesla1->boost();

echo $tesla1;

?>