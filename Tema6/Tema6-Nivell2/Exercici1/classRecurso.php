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
        return "<br>Información del recurso: <br>" .
        "Nombre: " . $this->nombre . "<br>" .
        "Tema: " . $this->tema->name . "<br>" . //name es para accedir al string de la clase Tema
        "URL: " . $this->URL . "<br>" .
        "Tipo: " . $this->tipoRecurso->name . "<br>"; //No se puede imprimir un objeto del e num
    }


}

?>