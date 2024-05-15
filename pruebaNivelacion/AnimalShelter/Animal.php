<?php declare(strict_types=1); 

include "Species.php";

class Animal {
    public string $name;
    public Species $species;
    public string $breed;
    public int $age;

public function __construct(string $name, Species $species, string $breed, int $age) {

    $this->name = $name;
    $this->species = $species;
    $this->breed = $breed;
    $this->age = $age;
}

public function __toString(): string {

    return "Name: " . $this->name . PHP_EOL
    . "Species: " . $this->species . PHP_EOL
    . "Breed: " . $this->breed . PHP_EOL
    . "Age: " . $this-> age . PHP_EOL;

}


}





?>