<?php declare(strict_types=1);

include "classDog.php";
include "classCat.php";

$dog1 = new Dog(
    "Prince Charles",
    20,
    HealthStatus::INJURED,
    "Cavalier King Charles Spaniel"
);

$dog2 = new Dog(
    "Carmelita",
    1,
    HealthStatus::SICK,
    "Catalan Sheepdog"
);

$cat1 = new Cat(
    "Nanita",
    30,
    HealthStatus::HEALTHY,
    "calico"
);

$cat2 = new Cat(
    "Snow",
    5,
    HealthStatus::DEAF,
    "white"
);

?>
