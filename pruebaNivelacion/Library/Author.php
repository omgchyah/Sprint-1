<?php declare(strict_types=1);

include "book.php";

class Author {
    public string $name;
    public int $birthYear;
    
    public array $books;


    public function __construct(string $name, int $birthYear) {
        $this->name = $name;
        $this->birthYear = $birthYear;
        $this->books = array();
    }

    public function addBooks(Book $book):void {
        $this->books[] = $book;
    }

    public function getBooks(): array {
        return $this->books;
    }

    public function getInfo():string {
        return $this->name . " (" . $this->birthYear . ")" . PHP_EOL;
    }
}


?>