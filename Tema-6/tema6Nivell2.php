<?php

require_once "C:/Users/User/xampp/htdocs/PHP/Sprint-1/Tema-6/tema6Nivell2.php";

class Buscador {


    public function getFile() {

        return __FILE__;

    }

    public function getDir() {

        return __DIR__;

    }

    public function __toString() {

        $path = $this->getDir();

        return "Path to file is: " . $path;
    }

}

$buscador = new Buscador();

echo $buscador->getFile() . "<br>";

echo $buscador->getDir() . "<br>";

echo $buscador;



?>