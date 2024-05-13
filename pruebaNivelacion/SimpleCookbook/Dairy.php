<?php declare(strict_types=1);


class Dairy extends Ingredient {

    public function __construct(string $name, float $quantity, Unit $unit) {
        parent::__construct($name, $quantity, $unit);
    }

    public function getDietaryImpact(): array {

    
        return ["Not suitable for vegans", "Not suitable for vegetarians", "Not suitable for lactose-intolerant people"];
    }
}

?>