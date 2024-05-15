<?php declare(strict_types=1); 

include "Shelter.php";

$animal1 = new Animal("Fido", Species::Dog, "Chihuahua", 4);
$animal2 = new Animal("Mittens", Species::Cat, "Grande", 6);
$animal3 = new Animal("Larguito", Species::Snake, "Coralita", 3);
$animal4 = new Animal("Pedro", Species::Fish, "Beta", 1);

$shelter1 = new Shelter(243);

$animals = array();

$animals = [$animal1, $animal2, $animal3, $animal4];

foreach($animals as $animal) {
    $shelter1->addAnimal($animal);
}

$animalsShelter1 = $shelter1->searchAnimals();

foreach($animalsShelter1 as $animal) {
    echo $animal->name . PHP_EOL;
}

echo $shelter1->searchAnimal("Fido");

echo $shelter1->removeAnimal2("Vero");

echo $shelter1->removeAnimal1("Fido");

echo $shelter1->removeAnimals3("Fido");

echo $shelter1->countAnimals();

echo $shelter1->getAvailableSpace();

echo $shelter1->searchAnimal4("Pedro");

echo $shelter1->deleteAnimal4("Pedro");


?>