<?php declare(strict_types=1);

include "Game.php";

class ConsoleGame {

    public string $name;
    public int $generation;

    public array $games;

    public function __construct(string $name, int $generation) {
        $this->name = $name;
        $this->generation = $generation;
        $this->games = array();
    }

    //Add array of videogames to each console

    public function addVideoGames(Game $game): void {

        $this->games[] = $game;

    }

    public function getVideoGames(): array {
        return $this->games;
    }

    //Search for a specifi videogame insid ethe ayrray

    public function searchVideoGame(string $title): string {

        $message = "This game is not available for this platform.";

        foreach($this->games as $game) {
            if(str_contains($game->title, $title)) {
                $message = "Name: " . $game->title;
            } 
        }

        return $message;

    }

    public function __toString(): string {

        $games = "";
        foreach($this->games as $game){
            $games .= $game . PHP_EOL;
        }
        return "Platform name: " . $this->name . PHP_EOL
        . "Generation: " . $this->generation . PHP_EOL
        . "Games: " . $games;
    }


}

?>