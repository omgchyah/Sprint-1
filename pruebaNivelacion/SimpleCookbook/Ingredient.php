<?php declare(strict_types=1);

//include "Unit.php";

abstract class Ingredient {

    public string $name;
    public float $quantity;
    public Unit $unit;

    public function __construct(string $name, float $quantity, Unit $unit) {
        $this->name = $name;
        $this->quantity = $quantity;
        $this->unit =  $unit;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getQuantity(): float {
        return $this->quantity;
    }

    public function getUnit(): Unit {
        return $this->unit;
    }

    abstract public function getDietaryImpact(): array;

}

?>