<?php declare(strict_types=1);

include "Media.php";

class Book extends Media {

    public string $author;


    public function __construct(string $author, string $title, Type $type, float $rating) {
        parent::__construct($title, $type, $rating);
        $this->author = $author;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function getType(): Type {
        return $this->type;
    }

    public function getRating(): float {
        return $this->rating;
    }

    public function getAuthor(): string {
        return $this->author;
    }

    public function setRating(float $rating): void {
        $this->rating = $rating;
    }

    public function getSummary(): string {
        return "Title: " . $this->title . "<br>"
        . "Author: " . $this->author . "<br>"
                . "Type: " . $this->type->name . "<br>"
                . "Rating: " . $this->getRating() . "<br>";
    }

}

?>