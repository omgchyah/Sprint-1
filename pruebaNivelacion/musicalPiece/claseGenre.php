<?php declare(strict_types=1);

abstract Class Genre {

    //Atributos
    public string $name;

    //constructor
    public function __construct(string $name) {
        $this->name = $name;
    }

    public function playExample(): string {
    }

}


?>