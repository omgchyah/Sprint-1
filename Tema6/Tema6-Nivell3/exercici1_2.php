<?php

//namespace Carbon;

require "vendor/autoload.php";

use Carbon\Carbon;

$now = Carbon::now();

$myBirthday = Carbon::create(1988, 5, 15);

if ($myBirthday->isBefore($now)) {
    echo "Ya has cumplido años.";
} else if ($myBirthday->isAfter($now)) {
    $diasRestantes = $myBirthday->diffInDays($now);
    echo "Cumples años en " . $diasRestantes . " días.";
} else {
    echo "¡Hoy cumples años!";
}


?>