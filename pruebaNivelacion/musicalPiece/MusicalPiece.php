<?php declare(strict_types=1);

include "claseGenre.php";
include "Instrumentos.php";

class MusicalPiece extends Genre {

    public string $title;
   
    public function __construct(string $name, string $title) {
        parent::__construct($name);
        $this->title = $title;
        $instrumentos[] = array();
    }

    public function addInstrument(Instrument $instrument): void {

        $this->instruments[] = $instrument;

    }

    public function getInstruments(): array{
        return $this->instruments;
    }

    public function playExample(): string {
        $respuesta = "";

        foreach($this->instruments as $instrument) {
            if($instrument->name == "VIOLIN") {
                $respuesta = "Música clásica.";
            } else if ($instrument->name == "GUITAR") {
                $respuesta = "Rock.";
            }
        }

        return $respuesta;
    }

    public function play(): string {

        $stringInstruments = "";

        foreach($this->getInstruments() as $instrument) {
            $stringInstruments .= $instrument->name . PHP_EOL;
        }


        return "Titulo: " . $this->title . PHP_EOL
        . "Género: " . $this->name . PHP_EOL
        . "Instrumentos: " . $stringInstruments . PHP_EOL;
        }
    
}

?>