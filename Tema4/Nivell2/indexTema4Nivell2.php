<?php declare(strict_types=1);

require "classPokerdice.php";

$numDados = 0;

function tirarDador(int $numDados): array {

    $dadoX = new PokerDice();
    $pokerDice = new PokerDice();

    $arrayDados = [];
    $arrayFigures = [];

    for($i = 0; $i < $numDados; $i++) {
        $arrayDados[] = $i;
    }

    foreach($arrayDados as $dado) {
        $figure = $dado->shapeName();
        $arrayFigures[] = $figure;
    }

    $numTiradas = $pokerDice()


    return $arrayFigures;

}

?>