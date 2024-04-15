<?php

//EXERCICI 1

$arrayX = array(5, 33, 26, 78, 101);

function elevarCubo(int $num): int {
    return $num * $num * $num;
}

$arrayCubo = array_map('elevarCubo', $arrayX);

foreach($arrayCubo as $num) {
    echo $num . " ";
}

//EXERCICI 2

$arrayY = array("Casa", "Perro", "Castillo", "Pizza", "Nube");

function conseguirPares(string $palabra): bool {

    return strlen($palabra) % 2 == 0;

}

$palabrasPares = array_filter($arrayY, 'conseguirPares');

echo "<br>";

//Mostrar con print_r
print_r($palabrasPares);

echo "<br>";

//Imprimir con foreach
foreach($palabrasPares as $palabra) {
    echo $palabra . " ";
}


?>