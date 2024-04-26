<?php declare(strict_types=1);

/*include "classAnimal.php";
include "interfaceAdoptable.php";*/

class Cat extends Animal implements Adoptable {

   //atributos
   public string $furColor;

    public function __construct(string $name, int $age, HealthStatus $healthStatus, string $furColor) {
        parent::__construct($name, $age, $healthStatus);
        $this->furColor = $furColor;
    }

    public function makeSound(): string {
        return "Meow meow!";
    }

    public function isEligibleForAdoption(): bool {
        return $this->age > 2;
    }

    public function eat(): string {

        if ($this->age < 6) {
            return "The cat must eat 3 meals of kibble per day";
        } else if ($this->age < 1) {
            return "The cat must eat 2 meals of kibble per day";
        } else {
            return "The cat must eat 1 meals of kibble per day";
        }

    }


}




?>