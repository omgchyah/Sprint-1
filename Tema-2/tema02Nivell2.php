<?php

//NIVELL 2

//EXERCICI 1

//Función que calcula costo total de una llamada
//(3 primeros minutos = 10 cent + 5 cent por cada minuto adicional)

$minutos = 0;

function costoLlamada($minutos) {

    $costo = 0;

    if ($minutos > 0 && $minutos <= 3) {
        $costo = 10;
    } else {
        $costo = 10 + (($minutos - 3) * 5);
    }

    return "Debe pagar " . $costo . " céntimos.";
}

echo costoLlamada(4);

    // EXERCICI 2

    //Carrito de la compra

    $cantidadXocos = 0;
    $cantidadXiclets = 0;
    $cantidadCaramels = 0;

    function totalCompra($cantidadXocos, $cantidadXiclets, $cantidadCaramels) {

        $total = $cantidadXocos + ($cantidadXiclets * 0.5) + ($cantidadCaramels * 1.50);

        return "El total de su compra es " . $total . " euros.\n";

    }

    echo totalCompra(2, 3, 4);


?>