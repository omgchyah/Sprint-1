<?php

//EXERCICI 1

$numeros = array(5, 6, 4, 9, 10);

echo $numeros[0] . "<br>";

echo $numeros[1] . "<br>";

echo $numeros[2] . "<br>";

echo $numeros[3] . "<br>";

echo $numeros[4] . "<br>";

//EXERCICI 2

$x = array (10, 20, 30, 40, 50, 60);

echo sizeof($x) . "<br>";

array_splice($x, 0, 1);

foreach($x as $a) {
    echo $a . "<br>";
}

$x = array_values($x);

echo sizeof($x) . "<br>";


?>