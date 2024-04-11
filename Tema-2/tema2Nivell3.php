<?php

// NIVEL 3

function eratostenes($num1, $num2) {
    $respuesta = "";

    //Loop for para verificar cada numero del rango
    for ($i = $num1; $i <= $num2; $i++) {
        $isPrimo = true; //Se asume que el número es primo

        //Modulo debe ser diferente a 0 en todas las iteraciones para que sea primo
        for ($j = 2; $j < $i; $j++) {
            if ($i % $j == 0 && $i != $j) { //Se excluye la division entre sí mismo
                $isPrimo = false;
            }
        }

        //Se concatena si es mayor a 1 y si es primo
        if ($isPrimo && $i > 1) {
            $respuesta .= $i . " + ";
        }
    }

    if ($respuesta == "") {
        $respuesta = "No hay número primos.";
    } else {
        $respuesta = rtrim($respuesta, " + ");
    }

    return $respuesta;
}

echo eratostenes(10, 100);


?>