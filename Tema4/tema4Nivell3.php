<?php

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

//Crear cinemas
$cinema1 = new Cinema("MOOBY", "Arena de Barcelona");
$cinema2 = new Cinema("Renoir", "Floridablanca");
$cinema3 = new Cinema("Verdi", "Gràcia");

$cinema1->agregarPeliculas("Dune: Part Two", 165, "Denis Villeneuve");
$cinema1->agregarPeliculas("Godzilla x Kong", 115, "Adam Wingard");
$cinema1->agregarPeliculas("King Fu Panda 4", 94, "Mike Mitchell");

$peliculasMOOBY = $cinema1->buscarPeliculas();
/*
foreach ($peliculasMOOBY as $movie) {
    echo "Movie: " . $movie->getNombre() . ", Duration: " . $movie->getDuracion() . " minutes, Director: " . $movie->getDirector() . "<br>";
}*/

?>