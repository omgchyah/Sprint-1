<?php

//EXERCICI 1

$array1 = array(30, 44, 100, 5.3, 12, 28, 45);
$array2 = array(12, 45, 66, 77, 89.34, 200);

function numIguales($array1, $array2) {

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

$numIguales = numIguales($array1, $array2);

echo "Números que se repiten:<br>";
foreach($numIguales as $num) {
    echo $num . "<br>";
}

function combinarArrays($array1, $array2) {

    foreach($array2 as $x) {
        array_push($array1, $x);
    }

    return $array1;
}

$arrayFinal = combinarArrays($array1, $array2);

foreach($arrayFinal as $x){
    echo $x . ", ";
}

?>