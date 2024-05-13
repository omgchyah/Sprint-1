<?php declare(strict_types=1);

class Vegetable extends Ingredient {

    public function __construct() {
        parent::__construct($name, $quantity, $unit);
    }

    public function getDietaryImpact(): array {

    
        return ["Not suitable for a LOWMAP food diet", "Not suitable for newborns"];
    }
}

?>