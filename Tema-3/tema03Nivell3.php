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

//EXERCICI 3

$arrayZ =  array(44, 120, 58, 1000, 9, 2);

function conseguirPrimos($num): bool {

    if($num <= 1) {
        return false;
    }

    for($i = 2; $i < $num; $i++) {
        if($num % $i == 0) {
            return false;
        } 
    }

    return true;
    
}

$arrayPrimos = array_filter($arrayZ, 'conseguirPrimos');

$arrayReducido = array_reduce($arrayZ, 'conseguirPrimos');

print_r($arrayZ);

?>