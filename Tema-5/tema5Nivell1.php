<?php

abstract class Animal

{

   abstract public function makeSound();

}

class Dog extends Animal

{

    //Atributos
    private $nombre;
    private $raza;
    private $manchas;

    //Constructor
    public function __construct(string $nombre, string $raza, bool $manchas)
    
    {
        $this->nombre =  $nombre;
        $this->raza = $raza;
        $this->manchas = $manchas;

    }

    //Método abstracto
    public function makeSound(): string
    {
        return "Guau guau!";
    }

}

class Cat extends Animal

{
        //Atributos
    private $nombre;
    private $color;
    private $comidaFavorita;

    //constructor
    public function __construct(string $nombre, string $color, string $comidaFavorita)
    {
        $this->nombre = $nombre;
        $this->color = $color;
        $this->comidaFavorita = $comidaFavorita;
    }

    //Método abstracto
    public function makeSound(): string
    {
        return "Miau miau!";
    }

}

$gato1 = new Cat("Garfield", "Amarillo", "Lasaña");

echo $gato1->makeSound();

echo "<br>";

$perro1 = new Dog("Fido", "Chihuahua", true);

echo $perro1->makeSound();




?>