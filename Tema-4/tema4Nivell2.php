<?php

class PokerDice {

    private $figure;

    //Método propio de probabilidad, resulta número aleatorio del 0 al 100
    public function throw(): int {

        $min = 0;
        $max = 100;

        return rand($min, $max);

    }

    //Método propio
    public function shapeName(): string {

        $randomNumber = $this->throw();
        $figure = "";
    
    //Borrar la primera condicion, es redundante
        if ($randomNumber <= 16) {
            $figure = "As";
        } else if ($randomNumber <= 33) {
            $figure = "K";
        } else if ($randomNumber <= 50) {
            $figure = "Q";
        } else if ($randomNumber <= 66) {
            $figure = "J";
        } else if ($randomNumber <= 83) {
            $figure = 7;
        } else {
            $figure = 8;
        }

        return $figure;

    }

    public function getTotalThrows(array $dados): int {

        $totalThrows = 0;

        foreach($dados as $dado) {
            $throw = $dado->throw();
            $totalThrows += $throw;
        }

       return $totalThrows; 
    }

    
}

//Crear 5 instancias de dados y agregarlos a un array

$dado1 = new PokerDice();
$dado2 = new PokerDice();
$dado3 = new PokerDice();
$dado4 = new PokerDice();
$dado5 = new PokerDice();

$dados = array($dado1, $dado2, $dado3, $dado4, $dado5);

function tirar5Dados(array $dados): array {

    $figure = "";
    $figures = [];

    foreach($dados as $dado) {
        $figure = $dado->shapeName();
        $figures[] = $figure;
    }

    return $figures;
}

$figures = tirar5Dados($dados);

echo "Figuras de los 5 dados lanzados:<br>";
foreach($figures as $figure) {
    echo $figure . "<br>";
}

//Numero de tiradas total

//Instancia de la clase

$pokerDice = new PokerDice();

$numTirades = $pokerDice->getTotalThrows($dados);

echo "<br> Número de tiradas: " . $numTirades;



?>