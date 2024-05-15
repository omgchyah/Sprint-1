<?php declare(strict_types=1); 

include "Animal.php";


class Shelter {
    public array $animals;
    public int $capacity;

    public function __construct(int $capacity) {
    $this->animals = array();
    $this-> capacity = $capacity;
    }


public function addAnimal(Animal $animal) {
    $this->animals[] = $animal;
}

public function searchAnimals(): array {
    return $this->animals;
}

public function searchAnimal(string $name): string {

    $found = false;

    $message = "";

    $nameLowerCase = strtolower($name);

    foreach($this->animals as $animal) {
        $animalLowerCase = strtolower($animal->name);
        if($nameLowerCase === $animalLowerCase && $found = true) {
            $message = $animal->name;
            $found = true;
            break;
            } else {
                $message = "Este animal no está registrado en este albergue.";
        }

        


          
    }

    return $message;
}
  


public function removeAnimal1(string $animal): string {

    $message = "";
    $removed = false;

    foreach($this->animals as $index => $animal) {
        if($animal->name === $animal) {
            unset($this->animals[$index]);
            $removed = true;
            $message = $animal->name . " ha sido eliminado.";
            break;
        } else {
            $message = "Este animal no está registrado en este albergue.";
     
        }

       
}

 return $message;
}

public function removeAnimal2(string $animal) {

    $message = "";
    $removed = false;

    for($i = 0; $i < count($this->animals); $i++) {
        if($this->animals[$i]->name === $animal) {
            unset($this->animals[$i]);
            $removed = true;
            $message = $this->animals[$i]->name . " ha sido eliminado.";
            break;
        } else {
            $message = "Este animal no está registrado.";
        }
    }

    return $message;
}

public function removeAnimals3(string $name): string {

    $found = false;

    $message = "";

    $nameLowerCase = strtolower($name);

    foreach($this->animals as $index => $animal) {
        $animalLowerCase = strtolower($animal->name);
        if($nameLowerCase === $animalLowerCase) {
            unset($this->animals[$index]);
            $message = $name . " ha sido eliminado.";
            $found = true;
            break;
            } else {
                $message = "Este animal no está registrado en este albergue.";
        }

        


          
    }

    return $message;


}


public function countAnimals(): int {

    $quantity = 0;
    $message = "";

    foreach($this->animals as $animal) {
        $quantity++;
    }
    
    return $quantity;

    //count($this->animals);
}

public function getAvailableSpace(): string {
    $message = "";
    $quantity = 0;
    $availableSpace = 0;

    $quantity = $this->countAnimals();

    $availableSpace = $this->capacity - $quantity;

    $message = "Quedan " . $availableSpace . " sitios disponibles.";

    return $message;


}

public function searchAnimal4(string $name): string {

    $message = "";

    foreach($this->animals as $animal) {
        if($animal->name === $name) {
            $message = $name . " está registrado aquí.";
            break;
        } else {
            $message = "Este animal no está registrado.";
        }

    }

    return $message;

}

public function deleteAnimal4(string $name): string{

    $message = "";

    foreach($this->animals as $index => $animal) {
        if($animal->name === $name) {
            unset($this->animals[$index]);
            $message = $animal->name . " ha sido eliminado.";
            break;
        } else {
            $message= $name . " no existe.";
        }
    }

    return $message;

}


}




?>