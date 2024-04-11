<?php

//EXERCICI 1

$numInt = 4;
$numDou = 3.1416;
$str = "números";
$esPetit = true;

if($esPetit){
    echo "Los números $numInt y $numDou son $str pequeños.";
}

const MI_NOMBRE = "Mi nombre es Rossana y me gusta programar.";

echo ucwords(MI_NOMBRE);

//EXERCICI 2

$helloWorld = "Hello, World!";

$helloMayus = strtoupper($helloWorld);
echo $helloMayus;

$mida = strlen($helloWorld);
echo $mida;

$alReves = strrev($helloWorld);
echo $alReves;

$str1 = "Este es el curso de PHP";

echo $str1 . " y aprendemos a escribir " . $helloWorld . " o " . $helloMayus . " que tiene " . $mida . " caracteres y al revés se escribe " . $alReves;

//EXERCICI 3

$x = 3;
$y = 4;

$n = 5.56;
$m = -9.21;

echo $x;
echo $y;
echo $n;
echo $m;

echo $x + $y;
echo $n + $m;

echo $x - $y;
echo $n - $m;

echo $x * $y;
echo $n * $m;

echo $x / $y;
echo $n / $m;

echo $x % $y;
echo $n % $m;

echo $x * 2;
echo $y * 2;
echo $n * 2;
echo $m * 2;

echo $x + $y + $n + $m;

echo $x * $y * $n * $m;

function miCalculadora($num1, $num2) {
    $suma = $num1 + $num2;
    $resta = $num1 - $num2;
    $mult = $num1 * $num2;
    $div = $num1 / $num2;

    return "Suma= $suma. Resta= $resta. Multiplicación= $mult. División= $div.";
}

echo miCalculadora(3, 4);

//Exercici 4

function contador($numInicial, $incrementador, $numFinal) {

    $resultado = "";

    while ($numInicial <= $numFinal) {
        $simbolo = ($numInicial < $numFinal) ? " + " : ".";
       $resultado .= $numInicial . $simbolo;
        $numInicial = $numInicial + $incrementador;
    }

    return $resultado;
}

echo contador(10, 2, 100);

//EXERCICI 5

function gradoEstudiante($nota) {

    $resultado = "";

    if ($nota >= 60) {
        $resultado = "Enhorabuena. Estás en la primera división.";
    } else if ($nota >= 45 && $nota < 60) {
        $resultado = "Muy bien. Estás en la Segunda División.";
    } else if ($nota >= 33 && $nota < 45) {
        $resultado = "Estás en la Tercera División.";
    } else {
        $resultado = "Lo siento. Has reprobado.";
    }

    return $resultado;
    
}

echo gradoEstudiante(32);

//EXERCICI 6

function isBitten() {

    $numRandom = rand(1, 100);

    if ($numRandom <= 50) {
        return "TRUE";
    } else {
        return "FALSE";
    }
}

echo isBitten();

?>