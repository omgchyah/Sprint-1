<?php declare(strict_types=1);

require "classTriangle.php";
require "classRectangle.php";


$triangle1 = new Triangle(4, 5);
echo $triangle1->area();

$rectangle1 = new Rectangle(9, 2);
echo $rectangle1->area();

?>