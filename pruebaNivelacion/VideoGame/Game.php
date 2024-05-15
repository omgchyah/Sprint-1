<?php declare(strict_types=1);

include "Genre.php";

class Game {

public string $title;
public Genre $genre;
public int $releaseYear;

public function __construct(string $title, Genre $genre, int $releaseYear) {
    $this->title = $title;
    $this->genre = $genre;
    $this->releaseYear = $releaseYear;
}

public function addPlayers(int $players): void {
    $this->players = $players;
}

public function ageRestriction(Genre $genre): string {

    $allowed = "";

    if($this->genre === Genre::HORROR || $this->genre === Genre::ACTION) {
        $allowed = "This game is not suitable for children." . PHP_EOL;
    } else {
        $allowed = "This game is suitable for all ages." .PHP_EOL;
    }

    return $allowed;

}

public function __toString(): string  {
    return "Title: " . $this->title . PHP_EOL
    . "Genre: " . $this->genre->name . PHP_EOL
    . "Release Year: " . $this->releaseYear . PHP_EOL;
}

}



?>