<?php declare(strict_types=1);

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
    
        if ($randomNumber <= 16) {
            $figure = "As";
        } else if ($randomNumber <= 33) {
            $figure = "K";
        } else if ($randomNumber <= 50) {
            $figure = "Q";
        } else if ($randomNumber <= 66) {
            $figure = "J";
        } else if ($randomNumber <= 83) {
            $figure = "7";
        } else {
            $figure = "8";
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