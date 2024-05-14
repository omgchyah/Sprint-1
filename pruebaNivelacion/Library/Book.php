<?php declare(strict_types=1);

include "Genre.php";
include "Author.php";

class Book {
    public string $title;
    public Author $author;
    public int $publicationYear;
    public Genre $genre;

    public function __construct(string $title, int $publicationYear, Genre $genre) {
        $this->title = $title;
        $this->publicationYear = $publicationYear;
        $this->genre = $genre;
        
    }

    public function getInfo(): string {
        return "Título: " . $this->title . PHP_EOL . "Author: " . $this->author->getInfo() . PHP_EOL
        . "Year: " . $this->publicationYear . PHP_EOL
        . "Genre: " . $this->genre->name;
    }
}


?>