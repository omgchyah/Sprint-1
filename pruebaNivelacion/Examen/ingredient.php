<?php

class Ingredient {

    public string $name;
    public int $cantidad;

    public function __construct(string $name, int $cantidad) {
        $this->name = $name;
        $this->cantidad = $cantidad;
    }

}


?>