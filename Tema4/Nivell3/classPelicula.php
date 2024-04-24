<?php declare(strict_types=1);

    class Pelicula {

        //Atributos
        public $nomPelicula;
        public $duracion;
        public $director;

        //Constructor

        public function __construct(string $nomPelicula, int $duracion, string $director) {
            $this->nomPelicula =  $nomPelicula;
            $this->duracion = $duracion;
            $this->director = $director;
        }

        //Getter methods

        public function getNomPelicula(): string {
            return $this->nomPelicula;
        }

        public function getDuracion(): int {
            return $this->duracion;
        }

        public function getDirector(): string {
            return $this->director;
        }

        //Setter methods

        public function setNomPelicula($nomPelicula): void {
            $this->nomPelicula =$nomPelicula;
        }

        public function setDuracion($duracion): void {
            $this->duracion = $duracion;
        }

        public function setDirector($director): void {
            $this->director = $director;
        }


    }

?>