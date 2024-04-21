<?php

enum Tema {
    case PHP;
    case CSS;
    case HTML;
    case SQL;
    case Laravel;
}

enum Tipo {
    case Fichero;
    case Articulo;
    case Video;

}

class Recurso {

    //Atributos
    public $nombre;
    public Tema $tema;
    public $URL;
    public Tipo $tipoRecurso;

    //Constructor
    public function __construct(string $nombre, Tema $tema, string $URL, Tipo $tipoRecurso) {
        $this->nombre = $nombre;
        $this->tema = $tema;
        $this->URL = $URL;
        $this->tipoRecurso = $tipoRecurso;
    }

    public function __toString() {
        return "Nombre: " . $this->nombre;
    }


}

$articuloPHP1 = new Recurso("Enum in PHP — Real life examples", Tema::PHP, "https://medium.com/@danielarcher/enum-in-php-real-life-examples-a596ba421f3c", Tipo::Articulo);

echo $articuloPHP1;


?>