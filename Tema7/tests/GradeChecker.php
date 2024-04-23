<?php declare(strict_types=1);

//EXERCICI 5

//Funcion que valora a los estudiantes de acuerdo a sus notas

function calificarEstudiante($nota) {

    $resultado = "";

    if ($nota >= 60) {
        $resultado = "Enhorabuena. Estás en la primera división.";
    } else if ($nota < 60) {
        $resultado = "Muy bien. Estás en la Segunda División.";
    } else if ($nota < 45) {
        $resultado = "Estás en la Tercera División.";
    } else {
        $resultado = "Lo siento. Has reprobado.";
    }

    return $resultado;
    
}

echo gradoEstudiante(45) . "<br>";

?>