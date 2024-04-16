<?php

//EXERCICI 1

$arrayX = array(5, 33, 26, 78, 101);

function elevarCubo(int $num): int {
    return $num * $num * $num;
}

$arrayCubo = array_map('elevarCubo', $arrayX);

echo "Array elevado al cubo:<br>";
foreach($arrayCubo as $num) {
    echo $num . "<br>";
}

//EXERCICI 2

$arrayY = array("Casa", "Perro", "Castillo", "Pizza", "Nube");

function conseguirPares(string $palabra): bool {

    return strlen($palabra) % 2 == 0;

}

$palabrasPares = array_filter($arrayY, 'conseguirPares');

echo "<br>";

echo "Palabras con número par de caracteres: <br>";

//Mostrar con print_r
print_r($palabrasPares);

echo "<br>";

//Imprimir con foreach
foreach($palabrasPares as $palabra) {
    echo $palabra . " ";
}

echo "<br>";

//EXERCICI 3 Sumar todos los números primos de un Array

$arrayZ =  array(44, 120, 58, 1000, 9, 2, 3, 11);

function conseguirPrimos(int $num): bool {

    $esPrimo = true;

    if ($num <= 1) {
        $esPrimo = false;
    }

    for($i = 2; $i < $num; $i++) {
        if($num % $i == 0) {
            $esPrimo = false;
        }
    }

    return $esPrimo;
}

function sumarPrimos($carry, $item) {
 
    $carry += $item;

    return $carry;

}

$arrayPrimos = array_filter($arrayZ, 'conseguirPrimos');

echo "<br> Números primos:<br>";
print_r($arrayPrimos);

$arrayReducido = array_reduce($arrayPrimos, "sumarPrimos");

echo "<br> Suma de números primos:<br>";
print_r($arrayReducido);

?>