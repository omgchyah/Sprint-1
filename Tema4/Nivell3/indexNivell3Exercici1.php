<?php declare(strict_types=1);

require "classCinema.php";

//Crear cinemas
$cinema1 = new Cinema("MOOBY", "Arena de Barcelona");
$cinema2 = new Cinema("Renoir", "Floridablanca");
$cinema3 = new Cinema("Verdi", "Gràcia");

$cinema1->agregarPeliculas("Dune: Part Two", 165, "Denis Villeneuve");
$cinema1->agregarPeliculas("Godzilla x Kong", 115, "Adam Wingard");
$cinema1->agregarPeliculas("King Fu Panda 4", 94, "Mike Mitchell");

$peliculasMOOBY = $cinema1->buscarPeliculas();

foreach ($peliculasMOOBY as $movie) {
    echo "Movie: " . $movie->getNomPelicula() . ", Duration: " . $movie->getDuracion() . " minutes, Director: " . $movie->getDirector() . "<br>";
}

?>