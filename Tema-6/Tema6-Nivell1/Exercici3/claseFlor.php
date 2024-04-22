<?php

//EXERCICI 3

class Flor {

    public $nombre;
    public $comestible;
    public $estacion;

    public function __construct(string $nombre, string $estacion, string $comestible) {
        $this->nombre = $nombre;
        $this->comestible = $comestible;
        $this->estacion = $estacion;
    }

    //Sobreescribir método mágico toString
    public function __toString(): string {
        return "La flor " . $this->nombre . " florece en " . $this->estacion . " y " . $this->comestible . " es comestible.<br>";
    }

}

?>