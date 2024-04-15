<?php

//EXERCICI 1

$array1 = array(30, 44, 100, 5.3, 12, 28, 45);
$array2 = array(12, 45, 66, 77, 89.34, 200);

function compararArrays(array $array1, array $array2): array {

    $numIguales = [];

    foreach($array1 as $x) {
        foreach($array2  as $y) {
            if($x == $y) {
                array_push($numIguales, $x);
            }
        }
    }

    return $numIguales;
}

$numIguales = compararArrays($array1, $array2);

echo "Números que se repiten:<br>";
foreach($numIguales as $num) {
    echo $num . "<br>";
}

function combinarArrays(array $array1, array $array2): array {

    foreach($array2 as $x) {
        array_push($array1, $x);
    }

    return $array1;
}

$arrayFinal = combinarArrays($array1, $array2);

//Declaro un String para poder imprimirlo en pantalla
$stringArrays = "";

//Concatenar cada número del array
foreach($arrayFinal as $x){
    $stringArrays .= $x . ", ";
}

$stringArrays = rtrim($stringArrays, ", "); //eliminar la coma al final

echo "Combinación de arrays: " . $stringArrays . "<br>";

//EXERCICI 2

$nombres = array(
    "Rossana" => array(8, 7, 9, 6, 10),
    "Carlos" => array(5, 8, 3, 2, 4),
    "Arturo" => array(10, 2, 8, 10, 10),
    "Constanza" => array(5, 8, 9, 7, 9),
    "Pedro" => array(10, 9, 10, 2, 1)
);

//Mostrar todas la notas de todos los alumnos

function mostrarAllNotes(array $nombres): string {

    $respuesta = "";

    foreach($nombres as $nombre => $notas) {
        $respuesta .= "$nombre: <br>";
        foreach($notas as $nota) {
            $respuesta .= "$nota <br>";
        }
    }

    return $respuesta;

}

$notasTodos = mostrarAllNotes($nombres);

echo $notasTodos;

//Mostrar las notas de un solo alumno

function mostrarNotaAlumno(array $nombres, string $nombreAlumno): array {

    $notas = $nombres[$nombreAlumno];

    return $notas;

}

$notas = mostrarNotaAlumno($nombres, "Rossana");

$stringNotas = "Notas de Rossana: " . "<br>";

foreach($notas as $nota) {
    $stringNotas .= "$nota <br>";
}

echo $stringNotas;

//Calcular el promedio de notas de un solo alumno

function promediarNotas(array $nombres): string {

    $promedioCadaAlumno = "";
    $promedioAlumno = "";


    foreach($nombres as $nombre => $notas) {
        $sumaNotas = 0;
        $cantidadNotas = 0;
        foreach($notas as $nota) {
            $sumaNotas += $nota;
            $cantidadNotas++;
        }
        $promedioAlumno = "El promedio de " . $nombre . " es " . $sumaNotas/$cantidadNotas . ".<br>";
        $promedioCadaAlumno .= $promedioAlumno . "<br>";
    }

    $sumaTodasNotas = 0;
    $cantidadTotalNotas = 0;
    $promedioClase = 0;

    foreach($nombres as $nombre => $notas) {
        foreach($notas as $nota) {
            $sumaTodasNotas += $nota;
            $cantidadTotalNotas++;
        }
    }

    $promedioClase = $sumaTodasNotas / $cantidadTotalNotas;

   return $promedioCadaAlumno . "El promedio total de la clase es " . $promedioClase;

}

$resultadoClase = promediarNotas($nombres);

echo $resultadoClase;



?>