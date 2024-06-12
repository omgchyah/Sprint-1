<?php

//NIVELL 1

//EXERCICI 1 Defineix variables integer, double, string i boolean

$numInt = 4;
$numDou = 3.1416;
$str = "números";
$esPetit = true;

if($esPetit){
    echo "Los números $numInt y $numDou son $str pequeños." . PHP_EOL;
}

//Editado
define("MI_NOMBRE", "Mi nombre es Rossana y me gusta programar.");

$modoTitulo = ucwords(MI_NOMBRE) . PHP_EOL;

//EXERCICI 2 Imprimir String "Hello, World!"

$helloWorld = "Hello, World!";

$helloMayus = strtoupper($helloWorld);
echo $helloMayus . "<br>";

$mida = strlen($helloWorld);
echo $mida . "<br>";

$alReves = strrev($helloWorld);
echo $alReves . PHP_EOL;

$str1 = "Este es el curso de PHP";

echo $str1 . " y aprendemos a escribir " . $helloWorld . " o " . $helloMayus . " que tiene " . $mida . " caracteres y al revés se escribe " . $alReves . PHP_EOL;

//EXERCICI 3 Operadores y función Calculadora

$x = 3;
$y = 4;

$n = 5.56;
$m = -9.21;

echo $x . "<br>";
echo $y . "<br>";
echo $n . "<br>";
echo $m . "<br>";

echo $x + $y . "<br>";
echo $n + $m . "<br>";

echo $x - $y . "<br>";
echo $n - $m . "<br>";

echo $x * $y . "<br>";
echo $n * $m . "<br>";

echo $x / $y . "<br>";
echo $n / $m . "<br>";

echo "Módulo" . $x % $y . "<br>";
echo "Módulo" . $n % $m . "<br>";

echo $x * 2 . "<br>";
echo $y * 2 . "<br>";
echo $n * 2 . "<br>";
echo $m * 2 . "<br>";

echo $x + $y + $n + $m . "<br>";

echo $x * $y * $n * $m . PHP_EOL;

//EDITADO para que acepte un parámetro de la operación
function miCalculadora(float $num1, float $num2, $operacion): float {

    $resultado = 0;

    if($operacion == "+") {
        $resultado = $num1 + $num2;
    } else if ($operacion == "-") {
        $resultado = $num1 - $num2;
    } else if ($operacion == "*") {
        $resultado = $num1 * $num2;
    } else if ($operacion == "/") {
        $resultado = $num1 / $num2;
    }

    return $resultado;
}

echo "Resultado de mi operación: " . miCalculadora(3, 4, "-") . "<br>";

//Exercici 4 Programa contador

//Parametros: número inicial, incrementador (En este caso, cuenta de 2 en 2) y número final

//EDITADO. Se agregó número por defecto

function contador($numInicial, $incrementador, $numFinal) {

    $numFinal= 10;

    $resultado = 0;

    while ($numInicial <= $numFinal) {
        $simbolo = ($numInicial < $numFinal) ? " + " : ".";
       $resultado .= $numInicial . $simbolo;
        $numInicial = $numInicial + $incrementador;
    }

    return $resultado;
}

echo "Contador: " . contador(10, 2, 100) . "<br>";

//EXERCICI 5

//Funcion que valora a los estudiantes de acuerdo a sus notas

//EDITADO para quitar las condiciones redundantes
function gradoEstudiante($nota) {

    $resultado = "";

    if ($nota >= 60) {
        $resultado = "Enhorabuena. Estás en la primera división.";
    } else if ($nota >= 45) {
        $resultado = "Muy bien. Estás en la Segunda División.";
    } else if ($nota >= 33) {
        $resultado = "Estás en la Tercera División.";
    } else {
        $resultado = "Lo siento. Has reprobado.";
    }

    return $resultado;
    
}

echo gradoEstudiante(60) . "<br>";

//EXERCICI 6

//Funcion que arroja True o False con un 50% de probabilidades

function isBitten() {

    $numRandom = rand(1, 100);

    if ($numRandom <= 50) {
        return "TRUE";
    } else {
        return "FALSE";
    }
}

echo isBitten() . "<br>";

?>