<?php

include "classRecurso.php";

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
  
  /*
  $phpTutorial = new Recurso(
    "Introducción a PHP",
    Tema::PHP,
    "https://www.example.com/php-tutorial.html",
    Tipo::Articulo
  );
  
  $sqlCourse = new Recurso(
    "Curso básico de SQL",
    Tema::SQL,
    "https://www.example.com/sql-course.mp4",
    Tipo::Video
  );
  
  echo $phpTutorial->nombre; // Prints "Introducción a PHP"
  echo $sqlCourse->tema; // Prints Tema::SQL (the enum value)
  
  // You can use conditional statements based on the Tema or Tipo enums
  if ($resource->tema === Tema::HTML) {
    echo "This resource is about HTML.";
  }
  
  if ($resource->tipoRecurso === Tipo::Fichero) {
    echo "Download the file resource.";
  }
  
  PHP
  
  $resources = array($phpTutorial, $sqlCourse);
  
  foreach ($resources as $resource) {
    echo "<h2>" . $resource . "</h2>"; // Uses the __toString() method
    echo "<p>Tema: " . $resource->tema . "</p>";
    echo "<p>URL: " . $resource->URL . "</p>";
    echo "<p>Tipo: " . $resource->tipoRecurso . "</p>";
  }
  
  
  
  */
  
  


?>