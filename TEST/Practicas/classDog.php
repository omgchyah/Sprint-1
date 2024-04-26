<?php declare(strict_types=1);

include "classAnimal.php";
include "interfaceAdoptable.php";

class Dog extends Animal implements Adoptable {

    //atributos
    public string $breed;

    //Construct
    public function __construct(string $name, int $age, HealthStatus $healthStatus, string $breed) {
        parent::__construct($name, $age, $healthStatus);
        $this->breed = $breed;
    }

    public function makeSound(): string {
        return "Woof woof!";
    }

    public function isEligibleForAdoption(): bool {
        return $this->age > 2;
    }

    public function eat(): string {

        if($this->age < 6) {
            return "The dog must eat 3 meals of kibble per day";
        } else {
            return "The dog must eat 2 meals of kibble per day";
        }
    }


}




?>