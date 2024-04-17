<?php

abstract class Animal {

    private $nombre;

    public function __construct(string $nombre) {
        $this->nombre = $nombre;
    }

   abstract public function makeSound(): string;

}

class Dog extends Animal {

    //Atributos
    public $raza;
    public $manchas;

    //Constructor
    public function __construct(string $nombre, string $raza, bool $manchas) {
        parent::__construct($nombre);
        $this->raza = $raza;
        $this->manchas = $manchas;

    }

    //Método abstracto
    public function makeSound(): string
    {
        return "Guau guau!";
    }

}

class Cat extends Animal {
        //Atributos
    public $color;
    public $comidaFavorita;

    //constructor
    public function __construct(string $nombre, string $color, string $comidaFavorita) {
        parent::__construct($nombre);
        $this->color = $color;
        $this->comidaFavorita = $comidaFavorita;
    }

    //Método abstracto
    public function makeSound(): string {
        return "Miau miau!";
    }

}

$gato1 = new Cat("Garfield", "Amarillo", "Lasaña");

echo $gato1->makeSound();

echo "<br>";

$perro1 = new Dog("Fido", "Chihuahua", true);

echo $perro1->makeSound();


?>