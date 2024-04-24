<?php

    class Pelicula {

    //Atributos
    private $nomPelicula;
    private $duracion;
    private $director;

    //Constructor

    public function __construct(string $nomPelicula, int $duracion, string $director) {
        $this->nomPelicula =  $nomPelicula;
        $this->duracion = $duracion;
        $this->director = $director;
    }

    //Getter methods

    public function getNombrePelicula(): string {
        return $this->nomPelicula;
    }

    public function getDuracion(): int {
        return $this->duracion;
    }

    public function getDirector(): string {
        return $this->director;
    }


    }

?>