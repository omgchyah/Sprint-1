<?php declare(strict_types=1);

include "Ingredient.php";

class Dairy extends Ingredient {

    public function __construct() {
        parent::__construct($name, $quantity, $unit);
    }

    public function getDietaryImpact(): array {

    
        return ["Not suitable for vegans", "Not suitable for vegetarians", "Not suitable for lactose-intolerant people"];
    }
}

?>