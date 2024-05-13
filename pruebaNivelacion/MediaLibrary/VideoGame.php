<?php declare(strict_types=1);

class Videogame extends Media {

    public string $developer;


    public function __construct(string $developer, string $title, Type $type, float $rating) {
        parent::__construct($title, $type, $rating);
        $this->developer = $developer;
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
        . "Developer: " . $this->title . "<br>"
                . "Type: " . $this->type->name . "<br>"
                . "Rating: " . $this->rating . "<br>";
    }

}

?>