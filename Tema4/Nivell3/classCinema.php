<?php declare(strict_types=1);

class Cinema {

    //Atributos
    private $nom;
    private $poblacion;
    private $listaPeliculas;

    //Constructor
    public function __construct(string $nom, string $poblacion) {
    $this->nom = $nom;
    $this->poblacion = $poblacion;
    $this->listaPeliculas = array();
    }

    public function agregarPeliculas(string $nomPelicula, int $duracion, string $director) {

        $this->listaPeliculas[] = new Pelicula($nomPelicula, $duracion, $director);
    }

    public function buscarPeliculas(): array {

        return $this->listaPeliculas;
    }
}

?>