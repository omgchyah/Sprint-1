<?php

include "classRecurso.php";

//Crear objeto
$articuloPHP1 = new Recurso(
    "Enum in PHP — Real life examples",
    Tema::PHP,
    "https://medium.com/@danielarcher/enum-in-php-real-life-examples-a596ba421f3c",
    Tipo::Articulo
  );
  
  echo $articuloPHP1->nombre . "<br>";
  echo $articuloPHP1->tema->name . "<br>";
  echo $articuloPHP1->URL . "<br>";
  echo $articuloPHP1->tipoRecurso->name . "<br>";
  
  echo $articuloPHP1;
  
  //Crear nuevo objeto
$articuloPHP2 = new Recurso(
    "Superglobals",
    Tema::PHP,
    "https://www.php.net/manual/es/language.variables.superglobals.php",
    Tipo::Articulo
);

echo $articuloPHP2;

//Crear recurso para CSS

$videoCSS1 = new Recurso(
    "Aprende CSS Flexbox en 15 Minutos",
    Tema::CSS,
    "https://www.youtube.com/watch?v=QFXSgGg-HWo",
    Tipo::Video
);
  
echo $videoCSS1;


?>