<?php

class Buscador {

    public function getFile() {

        return __FILE__;

    }

    public function getDir() {

        return __DIR__;

    }

    public function __toString() {

        $path = $this->getDir();

        return "Ruta de archivo: " . $path;
    }

}

$buscador = new Buscador();

echo $buscador->getFile() . "<br>";

echo $buscador->getDir() . "<br>";

echo $buscador;



?>