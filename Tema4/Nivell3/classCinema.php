<?php declare(strict_types=1);

require "classPelicula.php";

class Cinema {

    //Atributos
    public $nom;
    public $poblacion;
    public $listaPeliculas;

    //Constructor
    public function __construct(string $nom, string $poblacion) {
    $this->nom = $nom;
    $this->poblacion = $poblacion;
    $this->listaPeliculas = array();
    }

    //Getters

    public function getNom(): string {
        return $this->nom;
    }

    public function getPoblacion(): string {
        return $this->poblacion;
    }

    //Setters

    public function setNom($nom): void {
        $this->nom = $nom;
    }

    public function setPoblacion($poblacion): void {
        $this->poblacion = $poblacion;
    }

    public function agregarPeliculas(string $nomPelicula, int $duracion, string $director) {

        $this->listaPeliculas[] = new Pelicula($nomPelicula, $duracion, $director);
    }

    public function buscarPeliculas(): array {

        return $this->listaPeliculas;
    }
}

?>