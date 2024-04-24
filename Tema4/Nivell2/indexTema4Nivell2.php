<?php declare(strict_types=1);

require "classPokerdice.php";

$numDados = 0;

//Funcion para crear un array de dados
function crearArrayDados(int $numDados): array {

     $arrayDados = [];

    for($i = 0; $i < $numDados; $i++) {
        $arrayDados[] = new PokerDice();
    }

    return $arrayDados;
}

//Funcion para obtener las figuras del array de dados
function getFigures(array $arrayDados): array {

    $arrayFigures = [];

    foreach($arrayDados as $dado) {
        $figure = $dado->shapeName();
        $arrayFigures[] = $figure;
    }

    return $arrayFigures;
}


//Crear Array de dados
$fiveDados = crearArrayDados(5);

//Obtener las figuras de los 5 dados
$fiveFigures = getFigures($fiveDados);

//Imprimir array de las figuras de los dados
echo "Figuras de los " . $numDados . " dados:<br>";

foreach($fiveFigures as $figure) {
    echo $figure . "<br>";
}


//Llamar al metodo para obtener el numero total de tiradas del array de dados
$pokerDice = new PokerDice();

$numTiradas = $pokerDice->getTotalThrows($fiveDados);

echo "El número total de tiradas es de " . $numTiradas;

?>



