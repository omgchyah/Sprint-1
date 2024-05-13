<?php declare(strict_types=1);



class Movie extends Media {

    public string $director;


    public function __construct(string $director, string $title, Type $type, float $rating) {
        parent::__construct($title, $type, $rating);
        $this->director = $director;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function getType(): Type {
        return $this->type;
    }

    public function getrating(): float {
        return $this->rating;
    }

    public function setRating(float $rating): void {
        $this->rating = $rating;
    }

    public function getSummary(): string {
        return "Title: " . $this->title . "<br>"
        . "Director: " . $this->title . "<br>"
                . "Type: " . $this->type->name . "<br>"
                . "Rating: " . $this->rating . "<br>";
    }

}

?>