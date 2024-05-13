<?php declare(strict_types=1);



abstract class Media {

    public string $title;
    public Type $type;
    public float $rating;

    public function __construct(string $title, Type $type, float $rating) {
        $this->title = $title;
        $this->type = $type;
        
        if($rating >= 0.0 && $rating <= 5.0) {
            $this->rating = $rating;
        } else {
            echo "Error: Rating must be between 0.0 and 5.0.<br>";
        }
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

    abstract function getSummary(): string;
}

?>