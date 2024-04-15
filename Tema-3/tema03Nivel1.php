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

echo "Número de elementos del array: " . sizeof($x) . "<br>";

//Eliminar elementos de la lista con indice [0] el primero
array_splice($x, 0, 1);

echo "Array resultante:<br>";
//Imprimir foreach
foreach($x as $a) {
    echo $a . "<br>";
}

//Se reorganiza los indices
$x = array_values($x);

echo "Tamaño actualizado del array: " . sizeof($x) . "<br>";

//Exercici 3

function verificarArray(array $array, string $character): bool {

    $containsCharacter = false;

    foreach($array as $a) {
        if(strstr($a, $character)) {
            $containsCharacter = true;
        } else {
            $containsCharacter = false;
        }
    }

    return $containsCharacter;

}

//Definiendo caracteres y arrays para comprobar
$characterA = 'a';
$arrayA = array("Rossana", "Arturo", "Constanza", "Eugenia", "Pedro");

$characterH = 'h';
$arrayB = array("hola", "php", "html");

//Arrija false porque no todos los Strings incluyen el caracter a
if(verificarArray($arrayA, $characterA)) {
    echo "True. <br>";
} else {
    echo "False. <br>";
}

if(verificarArray($arrayB, $characterH)) {
    echo "Contiene el caracter h. <br>";
} else {
    echo "No contiene el caracter h. <br>";
}


//Exercici

$datos = array(
    "nom" => "Rossana",
    "edad" => 35,
    "email" => "rossana.liendo@gmail.com",
    "comida" => "Sushi"
);

echo "Mi nombre es " . $datos["nom"] . " y tengo " . $datos["edad"] . " años. Mi email es " . $datos["email"] . " y mi comida favorita es el " . $datos["comida"] . "<br>";



?>